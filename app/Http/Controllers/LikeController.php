<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 20/04/2017
 * Time: 11:15
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LikeController extends Controller
{
    public function like(Request $request, $idObject, $idPhoto)
    {
        DB::table('likes')->insert(['image_id' => $idPhoto,'user_id' => Auth::user()->id]);
        return redirect('activite/' . $idObject . '/galerie/' . $idPhoto);
    }

    public function unlike(Request $request,$idObject, $idPhoto)
    {
        DB::table('likes')->where('user_id', Auth::user()->id)->delete();
        return redirect('activite/' . $idObject . '/galerie/' . $idPhoto);
    }
}