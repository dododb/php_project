<?php
namespace App\modele;

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

        //Demo
        $this->_pathImg = 'http://bdecesibordeaux.fr/wp-content/uploads/2017/03/17078104_1319108774816483_1695234293_n-300x300.jpg';
        $this->_titre = 'TITRE';
        $this->_description = 'Description';
        $this->_prix = 10;
    }

    public function echoElement()
    {
        echo '<table class="elementList"><tr><td id="cell1"  rowspan="2"><img src="';

        echo $this->_pathImg;

        echo '"></td><td id="cell2"  colspan="2"><h2>';

        echo $this->_titre;

        echo '</h2><p class="descriptionElementList"></p>';

        echo $this->_description;

        echo '</td></tr><tr><td id="cell3"><a href="';

        echo $this->_type . "/" . $this->_idObject;

        echo '">Acheter</a></td><td id="cell4"><p class="prixElementList">';

        echo $this->_prix;

        echo ' €</p></td></tr></table>';
    }
}