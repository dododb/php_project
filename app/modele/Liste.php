<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:22
 */

namespace App\modele;

require 'Liste/ElementListe.php';

class Liste extends Racine
{
    private $_type;

    public function __construct($type)
    {
        $this->_type = $type;
    }

    public function echoObject()
    {
        //foreach
        for ($i = 0; $i < 4; $i++) {
            $test = new ElementListe($this->_type, 5);
            $test->echoElement();
        }
    }
}