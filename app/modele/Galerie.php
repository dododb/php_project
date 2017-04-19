<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:06
 */

namespace App\modele;
use Illuminate\Support\Facades\DB;

class Galerie extends Racine
{
    private $_idObject;
    private $_elements;
    public function __construct($idObject)
    {
        $this->_idObject = $idObject;
        $this->_elements = DB::table('image')->select('id', 'id_activite', 'image')->where('id_activite', $this->_idObject)->get();
    }

    public function echoObject()
    {
        echo '<div class="galeriePhoto"><table class="galerieTab">';
        echo '<tr class="lineGalerie">';

        $i = 1;
        foreach ($this->_elements as $line)
        {
            $this->echoCaseImage($line->id, '/php_project/public/images/activite/' . $this->_idObject . '/galerie/'. $line->image);

            $i++;
            if($i%4-1 == 0)
            {
                echo '</tr>';
                echo '<tr class="lineGalerie">';
            }
        }
        echo '</tr>';
        echo '</table></div>';
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