<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:17
 */

namespace App\modele;

use Illuminate\Support\Facades\DB;

class Produit extends Racine
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

        $element = DB::table('article')->select('id', 'article', 'prix', 'description_longue', 'description_courte' , 'image')->where('id', $this->_idObject)->first();


        $this->_pathImg = '/php_project/public/images/boutique/' . $this->_idObject . '/'. $element->image;
        $this->_titre = $element->article;
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

        $this->admin();
    }

    private function admin()
    {
        echo '<div class="galleriProduit"><form method="post" action="' . $this->_idObject . '">';
        echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        echo '<input type="submit" name="deleteProduit" value="Supprimer">';
        echo '</form></div>';
    }
}