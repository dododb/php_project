<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 19/04/2017
 * Time: 17:03
 */

namespace App\modele;


class FormulaireProduit extends Racine
{
    public function __construct()
    {

    }

    public function echoObject()
    {
        echo '<div class="DescriptionComplete">';
        echo '<form method="post" action="" enctype="multipart/form-data">';

        echo '<h2>Titre article</h2><input type="text" name="nom" value="">';
        echo '<h2>Prix</h2><input type="number" name="prix" value="">';

        echo '<h2>Description courte<br></h2><input name="description_courte" type="text" maxlength="100" id="commentairesArea">';
        echo '<h2>Description détaillé<br></h2><input name="description_longue" type="text" id="commentairesArea">';

        echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        echo '</div>';
        echo '<div class="modoButtun"><input type="submit" name="" value="Envoyer"></div>';
    }
}