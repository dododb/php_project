<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Produit;
use App\modele\Liste;
use Illuminate\Support\Facades\DB;
use App\Image;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ProduitController extends Controller
{
    public function getProduit($idProduit)
    {
        $prd = new Produit($idProduit);

        return view('Index', ['object' => $prd]);
    }

    public function getSoumettre()
    {
        return view('bde_site.produit.soumettre');
    }

    public function destroy($idProduit)
    {
        DB::table('article')->where('id', $idProduit)->delete();
        return redirect('boutique');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'article' => 'required',
            'image' => 'required',
            'prix' => 'required',
            'description_longue' => 'required',
            'description_courte' => 'required'
        ]);

        $image = new Image();
        if($request->hasFile('image')) {
            $file = Input::file('image');
            //dd($file);
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$file->getClientOriginalName();

            $image->image = $name;

            $file->move(public_path().'/images/', $name);
        }
        DB::table('article')->insert(
            ['image' => $image->image, 'article' => $request['article'], 'prix' => $request['prix'], 'description_courte' => $request['description_courte'], 'description_longue' => $request['description_longue']]
        );
        //DB::table('article')->insert(['article' => $request->nom, 'prix' => $request->prix, 'description_courte' => $request->description_courte, 'description_longue' => $request->description_longue]);
        return redirect('/boutique');
    }
}
