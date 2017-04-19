<?php
namespace App\modele;

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 19/04/2017
 * Time: 10:06
 */
class InscriptionVote
{
    private $_idObject;


    public function __construct($idObject)
    {
        $this->_idObject = $idObject;

    }

    public function echoListVote()
    {
        echo '<div class="DescriptionComplete"><form method="post" action="' . $this->_idObject . '/vote">
    	<select name="nom" size="1">
    		<option>lundi
    		<option>mardi
    		<option>mercredi
    		<option>jeudi
    		<option>vendredi
    	</select>
    	<input type="submit" value="Voter/S\'inscire"/>
    </option>
    </form>
</div>';
    }
}