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
use Auth as Auth;

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

        $this->_elements = DB::table('image')->select('id', 'activite_id', 'image')->where('activite_id', $this->_idObject)->where('id', $this->_idPhoto)->first();


        $this->_NavigationBarre = new NavigationBarre($this->_idObject, $this->_idPhoto);
        $this->_LikeBarre = new LikeBarre($this->_idObject, $this->_idPhoto);
        $this->_CommmentaireUser = new CommentaireUser($this->_idObject, $this->_idPhoto);
        $this->_Commentaires = new Commentaires($this->_idObject, $this->_idPhoto);
    }

    public function echoObject()
    {
        echo '<div class="container">';

        if(!Auth::guest()) {
            $this->admin();
        }

        $this->_NavigationBarre->echoNavigationBarre();

        echo '<div class="imageGallerie"><img src="/php_project/public/images/'. $this->_elements->image . '" id="mainImg"></div>';

        $this->_LikeBarre->echoLikeBarre();

        $this->_CommmentaireUser->echoCommentaireUser();

        $this->_Commentaires->echoCommentaires();

        echo '</div>';
    }

    private function admin()
    {
        if(DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first() != null) {
            if ('1' == DB::table('role_user')->select('user_id', 'role_id')->where('user_id', (Auth::user()->id))->first()->role_id) {
                echo '<div class="galleriProduit"><form method="post" action="' . $this->_idObject . '/delete">';
                echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                echo '<input type="hidden" name="supprimer" value="activite">';
                echo '<input type="submit" name="Activite" value="supprimer">';

                echo '</form></div>';
            }
        }
    }
}
