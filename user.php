<?php
require 'header.html';?>
    <link rel="stylesheet" href="css/pg_inscription.css">


    <form action="index.php" method="post">
        <input type="submit" value=" vers le JEUX" name="submit1" id="submit1">
    </form>

<?php
//------------------------------------------si le NOM n'est pas marqué-------------------------
echo "<span>BIENVENU : ".' '.$_POST['name'].' '.$_POST['LastName']."</span>";

if (empty($_POST['name'])) {
    echo "<br><br>";
    echo 'Veuillez indiquer votre nom svp ! ';

}
//------------------------------------------si le PRENOM n'est pas marqué-------------------------
if(empty($_POST['LastName'])){
    echo "<br><br>";
    echo 'veuillez indique votre prénom svp !';
}

//------------------------------------------si le GENRE n'est pas spécifié---------------------
/**if(empty($_POST['gender'])){
    echo "<br><br>";
    echo 'veuillez indique votre genre svp !';
    echo $_POST['submit'];
    echo "<br><br>";
}else{
    echo  $_POST['gender'];
    if(isset($_POST[''])){
        echo $_POST[''];
    }

}
 * */


require 'footer.html';

