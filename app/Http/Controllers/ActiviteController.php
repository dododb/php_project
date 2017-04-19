<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Activite;
use Illuminate\Support\Facades\DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class ActiviteController extends Controller
{
    public function getActivite($object)
    {
        $element = DB::table('activite')->select('adresse')->where('id', $object)->first();

        Mapper::location($element->adresse)->map(['zoom' => 13]);

        $act = new Activite($object);

        return view('Index', ['object' => $act]);
    }

    public function destroy($object)
    {
        DB::table('activite')->where('id', $object)->delete();
        return redirect('activite');
    }
}
