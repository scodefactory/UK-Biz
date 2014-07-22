<?php 
    ob_start();
    session_start();
    //error_reporting(E_ALL);
    ini_set("display_errors",0);
    include_once 'constants.php';
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
    if(isset($_SESSION['userType'])){
         $userType = $_SESSION['userType'];
    }
    print_r($userType);
    if($userType == "ADMIN")
        include_once "navigationAdmin.php";
    if ($userType == "EMPLOYER")
        include_once "navigation.php";
    if ($userType == "CANDIDATE")
        include_once "navigation.php";
    
        //do nothing;
?>
    
   
    
