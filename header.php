<?php 
    ob_start();
    session_start();
    error_reporting(E_ALL);
    ini_set("display_errors",2);
    date_default_timezone_set("UTC");
    include_once 'constants.php';
    include_once BASE_DIR . '/config/database.php';
    include_once BASE_DIR . '/classes/Auth.php';
    include_once BASE_DIR . '/classes/Helper.php';

    if(!Auth::check()){
        $requestURI = $_SERVER["REQUEST_URI"];
        $requestURI = explode("?", $requestURI)[0];
        if(!strpos($requestURI, "login.php") && !strpos($requestURI, "signUp.php")){
           $url = BASE_PATH . $requestURI;
           exit(header("Location: $url"));
        }
    }
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php if(isset($title)) 
            echo "Uttrakhand Bizz : " . $title;
        else
            echo "Uttrakhand Bizz";   
        ?>
        

    </title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
 

</head>

<body>
    <div id="wrapper">

<?php
 

    $userType ="";
    if(isset(Auth::user()->type)){
         $userType = Auth::user()->type;
    }

    if($userType == "ADMIN")
        include_once "navigationAdmin.php";
    if ($userType == "EMPLOYER")
        include_once "navigation.php";
    if ($userType == "CANDIDATE")
        include_once "navigation.php";
    
        //do nothing;
?>
    
   
    
