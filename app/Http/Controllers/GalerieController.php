<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Galerie;


class GalerieController extends Controller
{
    public function getGalerie($type, $idObject)
    {
        $gal = new Galerie($type,$idObject);

        return view('Index', ['object' => $gal]);
    }
}
