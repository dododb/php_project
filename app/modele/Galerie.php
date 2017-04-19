<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:06
 */

namespace App\modele;
use Illuminate\Support\Facades\DB;

class Galerie extends Racine
{
    public $idObject;
    public $elements;

    public function __construct($idObject)
    {
        $this->idObject = $idObject;
        $this->elements = DB::table('image')->select('id', 'activite_id', 'image')->where('activite_id', $this->idObject)->get();
    }
}