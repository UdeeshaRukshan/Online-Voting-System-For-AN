<?php
include('/OVAN/connection.php');

function check_login($con){

    if(isset($_SESSION['user_name']))
    {
        $id = $_SESSION['user_name'];
        $query = "SELECT * from user where user_name = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result)>0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }
    header("location: /OVAN/login.php");
    die;
}

?>