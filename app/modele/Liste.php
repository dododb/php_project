<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:22
 */

namespace App\modele;

use Illuminate\Support\Facades\DB;
use Auth as Auth;

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
        $this->all();

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

    private function all()
    {
        if(!Auth::guest())
        {
            if($this->_type == 'activite')
            {
                echo '<a href="' . $this->_type . '/soumettre"><div class="modoButtun">Soumettre une activité</div></a>';
            }
            else if(DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first() != null)
            {
                if ('1' == DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first()->role_id)
                {
                    echo '<a href="' . $this->_type . '/soumettre"><div class="modoButtun">Ajouter produit</div></a>';
                }
            }
        }
    }
}