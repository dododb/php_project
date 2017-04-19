<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Activite;
use Illuminate\Support\Facades\DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use App\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ActiviteController extends Controller
{
    public function getActivite($object)
    {
        $element = DB::table('activite')->select('adresse')->where('id', $object)->first();

        Mapper::location($element->adresse)->map(['zoom' => 13]);

        $act = new Activite($object);

        return view('bde_site.activite.activite', ['object' => $act, 'adresse' => $element->adresse]);
    }

    public function getSoumettre()
    {
        return view('bde_site.activite.soumettre');
    }

    public function destroy($object)
    {
        DB::table('activite')->where('id', $object)->delete();
        return redirect('activite');
    }

    public function store(Request $request)
    {$this->validate($request, [
            'nom_activite' => 'required',
            'photo_activite' => 'required',
            'prix' => 'required',
            'description_longue' => 'required',
            'description_courte' => 'required',
            'adresse' => 'required',
        ]);

        $image = new Image();
        //dd($request['photo_activite']);
        if($request->hasFile('photo_activite')) {
            $file = Input::file('photo_activite');
            //dd($file);
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$file->getClientOriginalName();
            $image->image = $name;

            $file->move(public_path().'/images/', $name);
        }
        DB::table('activite')->insert(
            ['photo_activite' => $name,
                'nom_activite' => $request['nom_activite'],
                'prix' => $request['prix'],
                'description_courte' => $request['description_courte'],
                'description_longue' => $request['description_longue'],
                'adresse' => $request['adresse']]
        );
        //DB::table('article')->insert(['article' => $request->nom, 'prix' => $request->prix, 'description_courte' => $request->description_courte, 'description_longue' => $request->description_longue]);
        return redirect('/activite');
    }
}
