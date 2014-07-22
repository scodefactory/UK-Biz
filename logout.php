<?php
session_start();
$_SESSION['userType'] ="";
unset($_SESSION);
unset($_SESSION['userType']);
header("Location: login.php");
?>