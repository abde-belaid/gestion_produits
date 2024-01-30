<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function verifierlogin(Request $request)
    {
        // dd($request->login);
        $user = Utilisateur::where('login', "=", $request->login)->first();

        if ($user && $user->password === $request->password) {
            // dd("login page");
            session()->put("statu", true);
            return redirect()->route("dash");
        } else {
            echo "introuvable";
        }
    }
}
