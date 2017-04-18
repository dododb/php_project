<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 18/04/2017
 * Time: 09:24
 */

namespace App\modele;


class Activite extends Racine
{
    private $_idObject;

    private $_pathImg;
    private $_titre;
    private $_descriptionRapide;
    private $_descriptionLongue;
    private $_prix;
    private $_lat;
    private $_lng;



    public function __construct($idObject)
    {
        $this->_idObject = $idObject;
        $this->_lat = -25.363;
        $this->_lng = 131.044;
    }

    public function echoObject()
    {
        echo "test Activite " . $this->_idObject;

        echo '<div id="map"></div><script type="text/javascript">';



/*
        echo 'function initMap() {var uluru = {lat: ';

        echo $this->_lat;

        echo ', lng:';

        echo $this->_lng;

        echo '};
        var map = new google.maps.Map(document.getElementById(\'map\'), {
          zoom: 4,
          center: Activité
        });
        var marker = new google.maps.Marker({
          position: Activite,
          map: map
        });
      }</script>';*/

            echo '
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARzJvXBtSprcylre7miuBQytSGw4llVDM&callback=initMap">
    </script>';

            echo 'done';
    }
}