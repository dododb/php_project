<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:06
 */

namespace App\modele;

require 'Galerie/LineImage.php';

class Galerie extends Racine
{
    private $_idObject;

    public function __construct($idObject)
    {
        $this->_idObject = $idObject;
    }

    public function echoObject()
    {
        echo '<div class="galeriePhoto"><table class="galerieTab">';
        $test = new LineImage(1,1, 0);
        $test->echoLikeBarre();
        echo '</table></div>';
    }
}