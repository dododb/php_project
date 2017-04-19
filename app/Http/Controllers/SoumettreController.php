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
}