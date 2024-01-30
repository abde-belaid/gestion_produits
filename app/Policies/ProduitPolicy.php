<?php

namespace App\Policies;

use App\Models\Produit;
use App\Models\Utilisateur;

class ProduitPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }



    public function view(Utilisateur $Utilisateur, Produit $Produit)
    {
        return $Utilisateur->id === $Produit->Utilisateur_id;
    }

    public function update(Utilisateur $Utilisateur, Produit $Produit)
    {
        return $Utilisateur->id === $Produit->Utilisateur_id;
    }

    public function delete(Utilisateur $Utilisateur, Produit $Produit)
    {
        return $Utilisateur->id === $Produit->Utilisateur_id;
    }
}
