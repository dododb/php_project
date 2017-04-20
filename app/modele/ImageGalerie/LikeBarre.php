<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:04
 */

namespace App\modele;
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
        $this->_like = DB::table('likes')->select('image_id')->where('image_id', $this->_idObject)->count();
    }

    public function echoLikeBarre()
    {
        echo '
        <table class="likePhoto">
            <td id="like">
                ' . $this->_like . ' LIKES
            </td>
            <td id="heart" onclick="like();">
                <img src="img/site/h2.png" class="heartImg" id="heartImg">
            </td>
        </table>';
    }
}