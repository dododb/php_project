<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Produit;

class ProduitController extends Controller
{
    public function getProduit($idProduit)
    {
        $prd = new Produit($idProduit);

        return view('Index', ['object' => $prd]);
    }
}
