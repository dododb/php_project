<?php
include 'Band1Website.php';
include 'Band2Menu.php';

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 13/04/2017
 * Time: 14:53
 */
class Head
{
    public function __construct()
    {
        new Band1Website();
        new Band2Menu();
    }
}