<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:03
 */


namespace App\modele;

class NavigationBarre
{
    private $_idObject;
    private $_idPhoto;

    public function __construct($idObject, $idPhoto)
    {
        $this->_idObject = $idObject;
        $this->_idPhoto = $idPhoto;
    }

    public function echoNavigationBarre()
    {
        echo '<div class="gallerieNavigation">';
        //echo '<a href="' . ($this->_idPhoto-1) . '"><img src="img/site/g.png" class="nav"></a>';
        echo '<a href="../galerie">Galerie</a>';
        //echo '<a href="' . ($this->_idPhoto+1) . '"><img src="img/site/d.png" class="nav"></a>';
        echo '</div>';
    }
}