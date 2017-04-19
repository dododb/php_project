<?php
namespace App\modele;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 10:03
 */
class ElementListe
{
    private $_type;
    private $_idObject;

    private $_pathImg;
    private $_titre;
    private $_description;
    private $_prix;


    public function __construct($type, $idObject)
    {
        $this->_type = $type;
        $this->_idObject = $idObject;

        if($this->_type == 'activite')
        {
            $element = DB::table('activite')->select('id', 'nom_activite', 'prix', 'description_courte', 'photo_activite')->where('id', $this->_idObject)->first();

            $this->_pathImg = '/php_project/public/images/activite/' . $this->_idObject . '/'. $element->photo_activite;
            $this->_titre = $element->nom_activite;
        }
        else if($this->_type == 'boutique')
        {
            $element = DB::table('article')->select('id', 'article', 'prix', 'description_courte', 'image')->where('id', $this->_idObject)->first();

            $this->_pathImg = '/php_project/public/images/boutique/' . $this->_idObject . '/'. $element->image;
            $this->_titre = $element->article;
        }

        $this->_description = $element->description_courte;
        $this->_prix = $element->prix;
    }

    public function echoElement()
    {
        echo '<table class="elementList"><tr><td id="cell1"  rowspan="3"><img src="';

        echo $this->_pathImg;

        echo '"></td><td id="cell2"  colspan="3"><h2>';

        echo $this->_titre;

        echo '</h2><p class="descriptionElementList"></p>';

        echo $this->_description;

        echo '</td></tr><tr><td id="cell3"><a href="';

        echo $this->_type . "/" . $this->_idObject;

        echo '">Voir</a></td><td id="cell4"><p class="prixElementList">';

        echo $this->_prix;

        echo ' €</p></td></tr></table>';
    }
}