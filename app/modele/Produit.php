<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:17
 */

namespace App\modele;


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

        echo '</td></tr><tr><td id="produitAcheCell"><a href="">Acheter</a></td></tr></table></div><div class="DescriptionComplete"><p>';

        echo $this->_descriptionLongue;

        echo '</p></div><a href="';

        echo $this->_idObject;

        echo '/galerie"><div class="galleriProduit">Galerie</div></a>';

        $this->admin();
    }

    private function admin()
    {
        echo '<a href=""><div class="galleriProduit">Supprimer annonce </div></a>';
    }
}