<?php session_start();

session_unset();
session_destroy();

header("Location: ../../Other/view/Login.php");
?>
