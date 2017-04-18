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
    private $_type;
    private $_idObject;
    private $_idPhoto;

    public function __construct($type, $idObject, $idPhoto)
    {
        $this->_type = $type;
        $this->_idObject = $idObject;
        $this->_idPhoto = $idPhoto;
    }

    public function echoNavigationBarre()
    {
        echo '<div class="gallerieNavigation">
        <a href=""><img src="img/site/g.png" class="nav"></a>
        <a href="">Galerie</a>
        <a href=""><img src="img/site/d.png" class="nav"></a>
        </div>';
    }
}