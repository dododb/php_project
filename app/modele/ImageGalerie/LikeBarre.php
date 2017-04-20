<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:04
 */

namespace App\modele;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LikeBarre
{
    private $_idObject;
    private $_idPhoto;
    private $_like;

    public function __construct($idObject, $idPhoto)
    {
        $this->_idObject = $idObject;
        $this->_idPhoto = $idPhoto;
        $this->_like = DB::table('likes')->select('image_id')->where('image_id', $this->_idPhoto)->count();
    }

    public function echoLikeBarre()
    {
        echo '<table class="likePhoto"><td id="like">' . $this->_like . ' LIKES</td><td id="heart">';

        if(!Auth::guest()) {
            if (DB::table('likes')->select('image_id', 'user_id')->where('user_id', (Auth::user()->id))->where('image_id', $this->_idPhoto)->first() == null) {
                $this->like();
            } else {
                $this->unlike();
            }
        }
        echo'</td></table>';
    }


    private function like()
    {
        if(DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first() != null) {
            if ('1' == DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first()->role_id) {
                echo '<div class="galleriProduit"><form method="post" action="' . $this->_idPhoto . '/like">';
                echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                echo '<input type="hidden" name="supprimer" value="activite">';
                echo '<input type="submit" name="Like" value="Like">';

                echo '</form></div>';
            }
        }
    }

    private function unlike()
    {
        if(DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first() != null) {
            if ('1' == DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first()->role_id) {
                echo '<div class="galleriProduit"><form method="post" action="' . $this->_idPhoto . '/unlike">';
                echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                echo '<input type="hidden" name="supprimer" value="activite">';
                echo '<input type="submit" name="Like" value="Unlike">';

                echo '</form></div>';
            }
        }
    }
}