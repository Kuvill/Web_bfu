<?php
session_start();
if (isset($_SESSION["name"]) && isset($_SESSION["email"]) && isset($_SESSION["phone"])) {
    $name = $_SESSION["name"];
    $subject = $_SESSION["email"];
    $experience = $_SESSION["phone"];
    echo "Your Name: $name <br> email: $email <br> phone: $phone";
}
?>
