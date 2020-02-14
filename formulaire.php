<?php require 'header.html' ?>

    <!DOCTYPE html PUBLIC>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire</title>
        <meta name="viewport" content="width=device-width, user-scalable=1">
        <link rel="stylesheet" href="css/pg_inscription.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

    <form action="user.php" method="post">
        <label for="name">Name: <br>
            <input id="name" type="text" name="name" placeholder=" Your name" style="background-color: beige">
        </label>

        <label for="lastName">Last name: <br>
            <input id="LastName" type="text" name="LastName" value="" placeholder=" Your name" style="background-color: beige">
        </label>

        <label for="email">Email: <br>
            <input id="email" type="email" name="email" value="" placeholder=" Your email" style="background-color: beige">
        </label>
        <label for="password">Password: <br>
            <input id="password" type="password" name="password" value="" placeholder=" Your password" style="background-color: beige">
        </label>
<!--
        <select name="gender" id="gender">
            <label>Votre genre:
                <option></option>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="Other">Other</option>
            </label>
        </select>
-->
        <input type="submit" name="Valider" value="valider" id="submit">
    </form>




    <script src="index.js"></script>
    </body>
    </html>
<?php echo "<br>";
require 'footer.html' ?>

