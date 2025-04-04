<?php
session_start();
$_SESSION["name"] = $_POST["email"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["experience"] = $_POST["phone"];
echo "You was Deannoned hehe";
?>
