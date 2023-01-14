<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname ="registration";

    $con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

    if($con -> connect_error){
        die("Conncetion failed:".$con -> connect_error);
    }
?>