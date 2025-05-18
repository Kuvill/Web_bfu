<?php
session_start();
$_SESSION["name"] = $_POST["email"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["phone"] = $_POST["phone"];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Popov Leonid</title>
    </head>

    <body>
        <h2>Safe form</h2>
        <form action="" method="POST">
            <p>Entry the name: <input type="text" name="name" /></p>
            <p>Entry the emal: <input type="text" name="email" /></p>
            <p>Entry the phone: <input type="text" name="phone" /></p>
            <input type="submit" value="submit">
        </form>

        <a href = "printer.php" >other page</a>
    </body>
</html>
