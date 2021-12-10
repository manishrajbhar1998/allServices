<?php

session_start();
include('../dbConnection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?></title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Fontawsome css -->
    <link rel="stylesheet" href="../css/fontawsome.min.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="../css/custom.css">

</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar nav-bar-dark fixed-top bg-primary flex-md-nowrap shadow ">
        <a href="RequestProfile.php" class="navbar-brand col-sm-3 col-md-2 text-white mr-0">Eco-Electronics</a>
    </nav>

    
    <div class="container-fluid mt-5 py-5">
        <div class="row">
            <!-- Side Bar start-->
            <nav class="col-sm-2 bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="RequestProfile.php" class="nav-link active"><i class="fas fa-user"></i>Profile</a></li>
                        <li class="nav-item"><a href="submitRequest.php" class="nav-link"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>
                        <li class="nav-item"><a href="CheckStatus.php" class="nav-link"><i class="fab fa-servicestack"></i>Check Status</a></li>
                        <li class="nav-item"><a href="changePassword.php" class="nav-link"><i class="fas fa-key"></i>Change Password</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
           <!-- Side Bar ends-->

           <!-- Submit area start -->
           

 