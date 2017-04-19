<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Galerie;


class GalerieController extends Controller
{
    public function getGalerie($idObject)
    {
        $gal = new Galerie($idObject);

        return view('bde_site.galerie', ['object' => $gal]);
    }
}
