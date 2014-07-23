<?php
include_once 'constants.php';
include_once BASE_DIR . '/config/database.php';
include_once BASE_DIR . '/classes/Auth.php';
session_start();
// $_SESSION['userType'] ="";
// unset($_SESSION);
// unset($_SESSION['userType']);
Auth::logout();
header("Location: login.php");
?>