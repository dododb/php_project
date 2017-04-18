<?php
namespace App\modele;

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 17/04/2017
 * Time: 23:06
 */
class LineImage
{
    private $_type;
    private $_idObject;

    public function __construct($type, $idObject)
    {
        $this->_type = $type;
        $this->_idObject = $idObject;
    }

    public function echoLikeBarre()
    {
        echo '<tr class="lineGalerie">';
        for ($i = 0; $i < 4; $i++) {
            $this->echoCaseImage($i,'http://bdecesibordeaux.fr/wp-content/uploads/2017/03/17078104_1319108774816483_1695234293_n-300x300.jpg');
        }
        echo '</tr>';
    }


    private function echoCaseImage($idImg, $pathImg)
    {
        echo '<td class="cellGalerie"><a href="galerie/';
        echo $idImg;
        echo '"><img src="';
        echo $pathImg;
        echo '" class="imgGallerie"></a></td>';
    }
}