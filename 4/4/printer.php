<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Popov Leonid</title>
    </head>

    <body>
        <?php
        session_start();
        if (isset($_SESSION["name"]) && isset($_SESSION["email"]) && isset($_SESSION["phone"])) {
            $name = $_SESSION["name"];
            $email = $_SESSION["email"];
            $phone = $_SESSION["phone"];
            echo "Your Name: $name <br> email: $email <br> phone: $phone";
        } else {
            echo "Please, entry your data please in index.php s:";
        }
        ?>
    </body>
</html>
