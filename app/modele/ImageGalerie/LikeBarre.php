<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:04
 */

namespace App\modele;


class LikeBarre
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

    public function echoLikeBarre()
    {
        echo '
        <table class="likePhoto">
            <td id="like">
                X LIKES
            </td>
            <td id="heart" onclick="like();">
                <img src="img/site/h2.png" class="heartImg" id="heartImg">
            </td>
        </table>';
    }
}