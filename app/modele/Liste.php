<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:22
 */

namespace App\modele;

use Illuminate\Support\Facades\DB;

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
        if($this->_type == 'activite')
        {
            $list = DB::table('activite')->orderBy('id')->select('id')->get();
        } else if($this->_type == 'boutique') {
            $list = DB::table('article')->orderBy('id')->select('id')->get();
        }

        foreach ($list as $id)
        {
            $test = new ElementListe($this->_type, $id->id);
            $test->echoElement();
        }
    }
}