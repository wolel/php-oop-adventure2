<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 11/02/2020
 * Time: 10:41
 */
require "classes/personnage.php";
require "classes/dragon.php";

session_start();

if(isset($_SESSION['personnage']))
{
    $personnage = $_SESSION['personnage'];
}
else {
    $personnage = new personnage();
    $_SESSION['personnage'] = $personnage;
}

include "controllers/main.php";

$position = $personnage->getPosition();

// Partie test

    $dragon = new dragon();
    $dragon->testAction();
    print_r($dragon->getActions());

//
include "views/main.php";
?>

