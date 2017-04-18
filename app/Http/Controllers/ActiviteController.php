<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Activite;


class ActiviteController extends Controller
{
    public function getActivite($object)
    {


        $act = new Activite($object);

        return view('Index', ['object' => $act]);
    }
}
