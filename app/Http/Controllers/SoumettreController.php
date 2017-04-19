<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 19/04/2017
 * Time: 17:21
 */
namespace App\Http\Controllers;
//require  'ImageGalerie\ImageGalerie.php';

use App\Image;
use App\modele\blade;
use App\modele\FormulaireProduit;
use App\modele\UploadImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modele\ImageGalerie;
use Auth as Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;



class SoumettreController extends Controller
{
    public function getActiviteFormulaire()
    {

    }

    public function getProduitFormulaire()
    {
        $formulaire =  new FormulaireProduit();
        return view('Index', ['object' => $formulaire]);
    }

    public function setProduit(Request $request)
    {
        DB::table('article')->insert(['article' => $request->nom, 'prix' => $request->prix, 'description_courte' => $request->description_courte, 'description_longue' => $request->description_longue]);
        return redirect('/boutique/soumettre/image');
    }
}