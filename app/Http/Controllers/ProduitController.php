<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Type;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public  function index()
    {
        $produits = Produit::paginate(5);
        return view('backend.dashboard')->with("produits", $produits);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail($ref)
    {
        $produit = Produit::where("refpdt", "=", $ref)->first();
        return view('backend.detailsproduit')->with("produit", $produit);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produit = new Produit();

        $request->validate([
            'reference' => 'required',
            'libelle' => 'required',
            'prix' => 'required',
            'quantite' => 'required',
            'description' => 'required',
            'type' => 'required',
            'image' => 'required',
        ]);


        $image = $request->file('image');

        if ($image) {
            $destination = "images/";
            $nomImage = $request->reference . "." . $image->getClientOriginalExtension();
            $image->move($destination, $nomImage);
        }

        $produit->image = $nomImage;
        $produit->refpdt = $request->reference;
        $produit->libpdt = $request->libelle;
        $produit->type = $request->type;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->Qnt = $request->quantite;
        $produit->save();
        return redirect(route("dash"));
    }

    public function create()
    {
        $types = Type::all();
        return view("backend.create")->with('types', $types);
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ref)
    {
        Produit::where("refpdt", "=", $ref)->delete();
        return back();
    }
}
