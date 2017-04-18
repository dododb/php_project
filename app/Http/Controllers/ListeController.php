<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Liste;


class ListeController extends Controller
{
    public function getListe($type)
    {
        $lis = new Liste($type);

        return view('Index', ['object' => $lis]);
    }
}
