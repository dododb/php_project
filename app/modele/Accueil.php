<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 19/04/2017
 * Time: 21:04
 */

namespace App\modele;


class Accueil extends Racine
{
    public function __construct()
    {

    }

    public function echoObject()
    {
        echo '<div class="imageGallerie"><img src="/php_project/public/images/bde_logo.png" id="mainImg"></div>';
    }
}