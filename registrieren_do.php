<?php
require("mysql.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrieren</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>
<div id="header">
    <a href="Startseite.php"><img src="ÜberschriftBlog.png" alt="Bild" width="100%"/></a>
</div>

<div class="content">
    <?php
    #if(!isset($_POST["login"]) or !isset($_POST["password"]))

    $statement = $pdo->prepare("INSERT INTO User (username, passwort) VALUES (?,?)");
    if($statement->execute(array(htmlspecialchars($_POST["username"]), password_hash($_POST["passwort"], PASSWORD_BCRYPT))))
    {
        echo "In Datenbank eingetragen";
    }else{
        die("Datenbank-Fehler");
    }
    ?>
</div>

<p>Zurück zur <a href="login.php">Login-Seite</a></p>
</body>
</html>