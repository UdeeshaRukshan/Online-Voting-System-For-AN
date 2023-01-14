<?php
session_start();
include ("/OVAN/connection.php");
include ("/OVAN/functions.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/OVAN/css/styles1.css">
    <title>Profile</title>
</head>
<body>
    
    <div class="wrapper">
        <div class="left">
            <img src="/OVAN/images/Profile picture.png" alt="User profile picture" width ="200px">
            <h1><?php echo $_SESSION["Username"]?></h1>
            <h3><?php echo $_SESSION["Occupation"]?></h3>
        </div>
        <div class="right">
            <div class="info">
                <h1>Personal Information <button id="home-nav"><a href="/OVAN/index.php">Go To Home </a></button></h1>
                <div class="info_data">
                    <div class="data">
                        <h2>Fullname</h2>
                        <p><?php echo $_SESSION["Fullname"]?>
                    Niklesh Pranandu</p>
                    </div>
                    <div class="data">
                        <h2>E-mail</h2>
                        <p><?php echo $_SESSION["E-mail"]?>
                    Niklesh12@gmail.com</p>
                    </div>
                    <div class="data">
                        <h2>Phone number</h2>
                        <p><?php echo $_SESSION["Phone"]?>
                    0715674654</p>
                    </div>
                    <div class="data">
                        <h2>Occupation</h2>
                        <p><?php echo $_SESSION["Occupation"]?>
                    Devops</p>
                    </div>
                    <div class="data">
                        <h2>Gender</h2>
                        <p><?php echo $_SESSION["Gender"]?>
                    female</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>