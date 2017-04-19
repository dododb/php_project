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
require 'Activite/InscriptionVote.php';

class Activite extends Racine
{
    private $_idObject;

    private $_pathImg;
    private $_titre;
    private $_descriptionRapide;
    private $_descriptionLongue;
    private $_prix;



    public function __construct($idObject)
    {
        $this->_idObject = $idObject;

        $element = DB::table('activite')->select('id', 'nom_activite', 'prix', 'description_courte', 'description_longue', 'photo_activite')->where('id', $this->_idObject)->first();

        $this->_pathImg = '/php_project/public/images/activite/' . $this->_idObject . '/'. $element->photo_activite;
        $this->_titre = $element->nom_activite;
        $this->_descriptionRapide = $element->description_courte;
        $this->_descriptionLongue = $element->description_longue;
        $this->_prix = $element->prix;
    }

    public function echoObject()
    {
        echo '<div class="produitPresentation"><table class="produitTable"><tr><td rowspan="5" id="produitImgCell"><img src="';

        echo $this->_pathImg;

        echo '"></td></tr><tr><td id="produitTitreCell"><h2>';

        echo $this->_titre;

        echo '</h2></td></tr><tr><td id="produitDescCell">';

        echo $this->_descriptionRapide;

        echo '</td></tr><tr><td id="produitPrixCell">';

        echo $this->_prix;

        echo ' €</td></tr><tr><td id="produitAcheCell"><a href="">Acheter</a></td></tr></table></div><div class="DescriptionComplete"><p>';

        echo $this->_descriptionLongue;

        echo '</p></div>';

        $test =  new InscriptionVote($this->_idObject);
        $test->echoListVote();


        echo '<div class="DescriptionComplete"><div style="width: 860px; height: 450px;">' . Mapper::render() . '</div></div>';

        echo '<a href="' . $this->_idObject . '\galerie"><div class="galleriProduit">Galerie</div></a>';

        $this->admin();
    }

    private function admin()
    {
        if(DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first() != null) {
            if ('1' == DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first()->role_id) {
                echo '<div class="galleriProduit"><form method="post" action="' . $this->_idObject . '/delete">';
                echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                echo '<input type="submit" name="deleteActivite" value="Supprimer">';
                echo '</form></div>';
            }
        }
    }
}