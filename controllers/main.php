<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 11/02/2020
 * Time: 15:24
 */

if (isset($_POST['move'])){
    $move = $_POST['move'];

    switch($move)
    {
        case "top":
            $personnage->moveTop();
            break;
        case "left":
            $personnage->moveLeft();
            break;
        case "right":
            $personnage->moveRight();
            break;
        case "bottom":
            $personnage->moveBottom();
            break;
    }
}
if (isset($_POST['action'])){
    $action = $_POST['action'];
}


