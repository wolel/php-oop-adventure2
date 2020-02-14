<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espacecom";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    echo 'Connection failed' . $conn->connect_error;
}else {
    //echo 'Connection OK'.$conn->select_db($dbname);
}