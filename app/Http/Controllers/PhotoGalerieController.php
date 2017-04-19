<?php

namespace App\Http\Controllers;
//require  'ImageGalerie\ImageGalerie.php';

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modele\ImageGalerie;
use Auth as Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PhotoGalerieController extends Controller
{
    public function getPhoto($idObject, $idPhoto)
    {
        $img = new ImageGalerie($idObject,$idPhoto);

        return view('Index', ['object' => $img]);
    }

    public function postComment(Request $request, $idObject, $idPhoto)
    {
        if(!Auth::guest())
        {
            DB::table('commentaire')->insert(
                ['id_photo' => $idPhoto, 'id_user' => Auth::user()->id, 'commentaire' => $request->commentaire, 'created_at' => Carbon::now('Europe/Paris'), 'updated_at' => Carbon::now('Europe/Paris')]
            );
        }

        return redirect()->back();
    }

    public function destroy(Request $request, $idObject, $idPhoto)
    {
        if(!$request->supprimer == 'activite')
        {
            DB::table('commentaire')->where('id', $request->supprimer)->delete();
            return redirect('activite/' . $idObject . '/galerie/' . $idPhoto);
        }
        else
        {
            DB::table('activite')->where('id', $idPhoto)->delete();
            dd($request);
        }
    }
}
