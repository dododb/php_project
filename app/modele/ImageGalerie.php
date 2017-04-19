<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:08
 */
namespace App\modele;

require 'ImageGalerie/NavigationBarre.php';
require 'ImageGalerie/LikeBarre.php';
require 'ImageGalerie/CommentaireUser.php';
require 'ImageGalerie/Commentaires.php';

use Illuminate\Support\Facades\DB;



class ImageGalerie extends Racine
{

    private $_idObject;
    private $_idPhoto;
    private $_elements;

    private $_NavigationBarre;
    private $_LikeBarre;
    private $_CommmentaireUser;
    private $_Commentaires;


    public function __construct($idObject, $idPhoto)
    {
        $this->_idObject = $idObject;
        $this->_idPhoto = $idPhoto;

        $this->_elements = DB::table('image')->select('id', 'id_activite', 'image')->where('id_activite', $this->_idObject)->where('id', $this->_idPhoto)->first();


        $this->_NavigationBarre = new NavigationBarre($this->_idObject, $this->_idPhoto);
        $this->_LikeBarre = new LikeBarre($this->_idObject, $this->_idPhoto);
        $this->_CommmentaireUser = new CommentaireUser($this->_idObject, $this->_idPhoto);
        $this->_Commentaires = new Commentaires($this->_idObject, $this->_idPhoto);
    }

    public function echoObject()
    {
        echo '<div class="container">';

        $this->_NavigationBarre->echoNavigationBarre();

        echo '<div class="imageGallerie"><img src="/php_project/public/images/activite/' . $this->_idObject . '/galerie/'. $this->_elements->image . '" id="mainImg"></div>';

        $this->_LikeBarre->echoLikeBarre();

        $this->_CommmentaireUser->echoCommentaireUser();

        $this->_Commentaires->echoCommentaires();

        echo '</div>';
    }
}