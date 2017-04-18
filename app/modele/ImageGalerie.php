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




class ImageGalerie extends Racine
{

    private $_type;
    private $_idObject;
    private $_idPhoto;

    private $_NavigationBarre;
    private $_LikeBarre;
    private $_CommmentaireUser;
    private $_Commentaires;


    public function __construct($type, $idObject, $idPhoto)
    {
        $this->_type = $type;
        $this->_idObject = $idObject;
        $this->_idPho = $idPhoto;

        $this->_NavigationBarre = new NavigationBarre($this->_type, $this->_idObject, $this->_idPhoto);
        $this->_LikeBarre = new LikeBarre($this->_type, $this->_idObject, $this->_idPhoto);
        $this->_CommmentaireUser = new CommentaireUser($this->_type, $this->_idObject, $this->_idPhoto);
        $this->_Commentaires = new Commentaires($this->_type, $this->_idObject, $this->_idPhoto);
    }

    public function echoObject()
    {
        echo '<div class="container">';

        $this->_NavigationBarre->echoNavigationBarre();

        echo '    <div class="imageGallerie">
        <img src="http://www.planwallpaper.com/static/images/6944150-abstract-colors-wallpaper_kYyj1ZQ.jpg" id="mainImg">
    </div>';

        $this->_LikeBarre->echoLikeBarre();

        $this->_CommmentaireUser->echoCommentaireUser();

        $this->_Commentaires->echoCommentaires();

        echo '</div>';
    }
}