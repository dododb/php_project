<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Produit;
use App\modele\Liste;
use Illuminate\Support\Facades\DB;


class ProduitController extends Controller
{
    public function getProduit($idProduit)
    {
        $prd = new Produit($idProduit);

        return view('Index', ['object' => $prd]);
    }

    public function deleteProduit($idProduit)
    {
        DB::table('article')->where('id', $idProduit)->delete();
        return redirect('boutique');
    }
}
