<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:05
 */

namespace App\modele;
use Auth as Auth;
use Form as Form;

class CommentaireUser
{
    private $_idObject;
    private $_idPhoto;

    public function __construct($idObject, $idPhoto)
    {
        $this->_idObject = $idObject;
        $this->_idPhoto = $idPhoto;
    }

    public function echoCommentaireUser()
    {
        echo '<div class="posterCommentaire"><div class="nameUser">';

        if(!Auth::guest())
        {
            echo Auth::user()->nom . ' ' . Auth::user()->prenom;
        }
        else
        {
            echo 'Connectez-vous pour pouvoir poster un commentaire';
        }

        echo '<form method="POST" action="' . $this->_idPhoto  . '" accept-charset="UTF-8">';
        echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        echo '</div><div class="commentaireText">Commentaire<br><input name="commentaire" type="text" id="commentairesArea"></div><input type="submit" class="poster" value="Poster"></div>';
        echo '</form>';
    }
}