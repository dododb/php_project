<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:05
 */
namespace App\modele;
use Illuminate\Support\Facades\DB;


class Commentaires
{
    private $_idObject;
    private $_idPhoto;

    private $_commentaires;

    public function __construct( $idObject, $idPhoto)
    {
        $this->_idObject = $idObject;
        $this->_idPhoto = $idPhoto;

        $this->_commentaires = DB::table('commentaire')->join('users', 'commentaire.id_user', '=', 'users.id')->select('prenom', 'nom', 'id_photo', 'id_user', 'commentaire')->where('id_photo', $this->_idPhoto)->get();

    }

    public function echoCommentaires()
    {
        foreach ($this->_commentaires as $commentaire)
        {
            echo '<div class="espaceCommentaires"><div class="commentaires"><div class="userCommentaire">';
            echo $commentaire->nom . ' ' . $commentaire->prenom;
            echo '</div><p class="textCommentaire">';
            echo $commentaire->commentaire . '</p>';
            echo'</div>';
        }





        /*
         * if admin :
         * <button class="deleteCommentaire">delete</button>
         */
        echo '</div>';
    }
}