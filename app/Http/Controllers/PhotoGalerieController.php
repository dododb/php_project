<?php

namespace App\Http\Controllers;
//require  'ImageGalerie\ImageGalerie.php';

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modele\ImageGalerie;

class PhotoGalerieController extends Controller
{
    public function getPhoto($idObject, $idPhoto)
    {
        $img = new ImageGalerie($idObject,$idPhoto);

        return view('Index', ['object' => $img]);
    }
}
