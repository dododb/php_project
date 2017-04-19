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

class Activite extends Racine
{
    private $_idObject;

    private $_pathImg;
    private $_titre;
    private $_descriptionRapide;
    private $_descriptionLongue;
    private $_prix;
    private $_lieu;



    public function __construct($idObject)
    {
        $this->_idObject = $idObject;

        $element = DB::table('activite')->select('id', 'nom_activite', 'prix', 'description_courte', 'description_longue', 'photo_activite', 'lieu')->where('id', $this->_idObject)->first();

        $this->_pathImg = '/php_project/public/images/activite/' . $this->_idObject . '/'. $element->photo_activite;
        $this->_titre = $element->nom_activite;
        $this->_descriptionRapide = $element->description_courte;
        $this->_descriptionLongue = $element->description_longue;
        $this->_prix = $element->prix;

        $this->_lieu = $element->lieu;
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

        echo '<div class="DescriptionComplete">
   	<form method="post" action="action.php">
    	<select name="nom" size="1">
    		<option>lundi
    		<option>mardi
    		<option>mercredi
    		<option>jeudi
    		<option>vendredi
    	</select>
    	<input type="submit" value="Voter/S\'inscire"/>
    </option>
</div>';


        echo '<div class="DescriptionComplete">
<div style="width: 860px; height: 450px;">
	' . Mapper::render() . '
</div></div>';

        echo '<a href=""><div class="galleriProduit">
Galerie
</div></a>';

        $this->admin();
    }

    private function admin()
    {
        echo '<div class="galleriProduit"><form method="post" action="' . $this->_idObject . '">';
        echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        echo '<input type="submit" name="delete" value="Supprimer">';
        echo '</form></div>';
    }
}