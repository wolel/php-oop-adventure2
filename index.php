<link rel="stylesheet" href="css/style_jeux.css">

<?php
require 'header.html';
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 11/02/2020
 * Time: 10:41
 */
?>
<form action="user.php" method="post" id="formJeux"><?php

require "traits/personnageUtils.php";
require "classes/personnage.php";
require "classes/dragon.php";
require "classes/Classe1.php";
require "classes/Classe2.php";

use classes\maClasse as Classe1;
use classes2\maClasse as Classe2;
//"use" crée des espaces de 'noms'


//================================================SESSION START====****
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



//==================================les CLASSE1 + CLASSE2******
$classe1 = new Classe1;
$classe2 = new Classe2;

$classe1->test();
$classe2->test();
//======================= PARTIE TEST: =================//

//---------définir une constante procédurale:-------------------
    define('TEST',1);
    echo TEST;
    echo "<br>";
//---------


    $dragon = new dragon();
    echo "<br>";
//$dragon->test();//------parceque 'use testTrait'
$dragon->placeRandom();
print_r($dragon->getPosition());
    echo "Il y a : ".personnage::getNumInstance()." personnage dans le jeux.";
    $dragon->testAction();
    echo "<br>";
    echo dragon::TYPE;//permet aussi d'acceder au constances de "classe"
    echo "La vie du dragon est de : ".' '.$dragon->getLife().' '.'( défini dans INDEX)';
    echo "<br>";
    print_r($dragon->getActions());

//
include "views/main.php";
require 'footer.html';
?>

<!--==================================================================================-->
    </form>
        <form action="formulaire.php" method="post" id="formRetourInscr">
        <input type="submit" value=" <= Retour page inscription" name="submit1" id="submit1">
    </form>

    <form action="page_membre.php" method="post" id="formComm">
        <label>Acces au forum de commentaires
        Pseudo:     <input type="text" name="pseudo" id="pseudo" placeholder="pseudo" required>
        Password:   <input type="password" name="pass" id="pass">
        <a href="page_membre.php"><button type="submit"></button></a>
        </label>
    </form>

<!--ouvrir avec une requete AJAX le forum 'page_membre'sur la meme page-->
