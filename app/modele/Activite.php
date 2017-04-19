<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:24
 */

namespace App\modele;
use Illuminate\Support\Facades\DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Auth as Auth;

class Activite extends Racine
{
    public $idObject;

    public $pathImg;
    public $titre;
    public $descriptionRapide;
    public $descriptionLongue;
    public $prix;

    public function __construct($idObject)
    {
        $this->idObject = $idObject;

        $element = DB::table('activite')->select('id', 'nom_activite', 'prix', 'description_courte', 'description_longue', 'photo_activite')->where('id', $this->idObject)->first();

        $this->pathImg = '/php_project/public/images/' . $element->photo_activite;
        $this->titre = $element->nom_activite;
        $this->descriptionRapide = $element->description_courte;
        $this->descriptionLongue = $element->description_longue;
        $this->prix = $element->prix;
    }
}