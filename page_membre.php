<link rel="stylesheet" href="css/style.css">
<?php
session_start();
include ('server.php');
$pseudo = $_POST['pseudo'];

if (empty($_POST['pseudo'])) {
    echo "<br><br>";
    echo 'Veuillez indiquer votre nom svp ! ';

} else {
    echo '<div id="headerDIV">Bonjour'.' '.$_POST['pseudo'].'</div';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, user-scalable=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="angular/angular.min.js"></script>

</head>
<body>

<header>
    <div></div>
</header>

<aside>
    <div data-ng-app="forumComm" data-ng-init="comment='entrer your comment" data-ng-controller='monControleur'>

        <ol>
            <li data-ng-repeat="comment in comments">{{comment}}</li>
        </ol>

        <!-----------------AJOUT 'UN ELEMENT' avec une FONCTION----------------->

        <input type="text" name="addComm" data-ng-model="addComm">
        <button data-ng-click="addComments()">Add comment</button>

        <input type="hidden" name="suppComm" id="suppComm" data-ng-model="suppComm" placeholder="write your comment">
        <button data-ng-click="suppComm()">Delete comment</button>
        <div id="divComm"></div>

    </div>
</aside>

<script src="index.js"></script>
</body>
</html>




