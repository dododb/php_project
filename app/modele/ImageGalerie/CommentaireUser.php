<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:05
 */

namespace App\modele;


class CommentaireUser
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

    public function echoCommentaireUser()
    {
        echo '
    <div class="posterCommentaire">
        <div class="nameUser">UserName</div>
        <div class="commentaireText">
            Commentaire<br>
            <textarea id="commentairesArea"></textarea>
        </div>
        <button class="poster">Poster</button>
    </div>
        ';
    }
}