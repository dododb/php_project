<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:05
 */
namespace App\modele;
use Illuminate\Support\Facades\DB;
use Auth as Auth;

class Commentaires
{
    private $_idObject;
    private $_idPhoto;

    private $_commentaires;

    public function __construct( $idObject, $idPhoto)
    {
        $this->_idObject = $idObject;
        $this->_idPhoto = $idPhoto;

        $this->_commentaires = DB::table('commentaire')->join('users', 'commentaire.user_id', '=', 'users.id')->select('prenom', 'nom', 'commentaire.id', 'user_id', 'commentaire', 'commentaire.created_at', 'commentaire.id')->orderBy('commentaire.created_at', 'desc')->where('commentaire.image_id', $this->_idPhoto)->get();
    }

    public function echoCommentaires()
    {
        foreach ($this->_commentaires as $commentaire)
        {
            echo '<div class="espaceCommentaires"><div class="commentaires"><div class="userCommentaire">';
            echo $commentaire->nom . ' ' . $commentaire->prenom;
            echo '</div><p class="textCommentaire">';
            echo $commentaire->created_at . '   : <br>' . $commentaire->commentaire . '</p>';
            echo'</div>';
            if(!Auth::guest()) $this->admin($commentaire->id);

        }
        echo '</div>';
    }

    private function admin($id_commentaire)
    {
        if(DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first() != null) {
            if ('1' == DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first()->role_id) {
                echo '<form method="post" action="' . $this->_idPhoto . '/delete">';
                echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                echo '<input type="hidden" name= "supprimer" value="' . $id_commentaire . '">';
                echo '<input type="submit" name="" value="Supprimer">';

        echo '</form>';
            }
        }
    }
}