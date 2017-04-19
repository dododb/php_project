<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Activite;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class ActiviteController extends Controller
{
    public function getActivite($object)
    {
        Mapper::map(53.381128999999990000, -1.470085000000040000);

        $act = new Activite($object);

        return view('Index', ['object' => $act]);
    }
}
