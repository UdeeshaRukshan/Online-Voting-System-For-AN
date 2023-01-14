<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    require 'form.php';
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>

  <link rel="stylesheet" href="/OVAN/css/admin.css">
  <style>
    
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: cursive;
    
}

body{
    background-color:black;
}
.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    display: flex;
    flex-direction: raw;
    align-items: center;
    background-color: white;
    padding: 30px;
    border: 5px solid red;
    
}
.myform{

width: 270px;   
margin-right: 30px;




}
.adminH{
    color:gold;
    margin-bottom: 40px;

}
.maininput{
    border: none;
    outline: none;
    border-radius: 0;
    width: 100%;
    border-bottom: 2px solid black;
    margin-bottom: 25px;
    padding:7px 0 ;
    font-size: 14px;

}
.subbtn{
    color: white;
    background-color: black;
    border: none;
    outline: none;
    border-radius: 2px;
    font-size: 20px;
    padding: 5px 12px;
    font-weight:500;
    align-items: center;
    color: gold;



}
.adminImg{
    width: 500px;
    
}
</style>
</head>
<body>
    <div class="container">
        <div class="myform">
            <form method="post" action="">
                <h2 class="adminH">ADMIN LOGIN</h2>
                <input type="text" class="maininput" name="email"placeholder="Admin Name" required >
                <input type="password" class="maininput" name="password" placeholder="password" required >
                <button type="submit" class="subbtn" name="submit" value="LOGING">submit</button>
            </form>

        </div>
        <?php
            $con=new mysqli("localhost","root","","admin")or die("Connection error");
            
                $username=$_POST['email'];
                $password=$_POST['password'];

                $sql="SELECT * FROM admin1 WHERE email='$username' and password='$password'";
                $result=mysqli_query($con,$sql);
                $count =mysqli_num_rows($result);
                if($count>0){
                    
                    header("Location: /OVAN/adminN.php");
                }
                else{
                    echo 'Login not sucessfully';
                }
            
                $con->close();
 ?>  

   
        <div>
            <img class="adminImg" src="/OVAN/images/images1/adminpage/admin_1.jpg">
        </div>
        
    </div>
    
</body>
</html>