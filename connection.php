<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname ="OVAN";

    $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>
