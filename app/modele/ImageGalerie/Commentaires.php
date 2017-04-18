<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/04/2017
 * Time: 12:05
 */
namespace App\modele;


class Commentaires
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

    public function echoCommentaires()
    {

        echo '<div class="espaceCommentaires"><div class="commentaires"><div class="userCommentaire">';
        echo 'User';
        echo '</div><p class="textCommentaire">';
        echo 'Commentaire Exemple :         Haec ubi latius fama vulgasset missaeque relationes adsiduae Gallum Caesarem permovissent, quoniam magister equitum longius ea tempestate distinebatur, iussus comes orientis Nebridius contractis undique militaribus copiis ad eximendam periculo civitatem amplam et oportunam studio properabat ingenti, quo cognito abscessere latrones nulla re amplius memorabili gesta, dispersique ut solent avia montium petiere celsorum.
                Iamque non umbratis fallaciis res agebatur, sed qua palatium est extra muros, armatis omne circumdedit. ingressusque obscuro iam die, ablatis regiis indumentis Caesarem tunica texit et paludamento communi, eum post haec nihil passurum velut mandato principis iurandi crebritate confirmans et statim inquit exsurge et inopinum carpento privato inpositum ad Histriam duxit prope oppidum Polam, ubi quondam peremptum Constantini filium accepimus Crispum.</p>
';
        echo'</div>';

        /*
         * if admin :
         * <button class="deleteCommentaire">delete</button>
         */
        echo '</div>';
    }
}