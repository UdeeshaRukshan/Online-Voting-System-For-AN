

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/OVAN/css/loginstyle.css">
    
    <title>Login</title>
</head>
<body>

    <div class = "container">
    <form action ="" method = "post">
    <div class="title">Log in</div>
        <div class = "user-details">
            <div class = "input-box">
                <span class = "details">Username</span>
                <input type ="text" name ="UEmail" placeholder="Username" required>
            </div> 
            <div class = "input-box">   
            <span class = "details">Password</span>  
                <input type ="password" name ="PasswordL" placeholder="Password" required>
            </div>
        </div>
        <div class = "button">
        <input type ="submit" name ="Login" value="Login">
        </div>
        </br>

        Not a Member? <a href ="/OVAN/Resgister.php">Register</a></br>
        Admin <a href = "/OVAN/admin.php">Log in</a>
    </form>
    </div>
 


  

</body>
</html>
<?php
   $con=new mysqli("localhost","root","","registration")or die("Connection error");
            
   $username=$_POST['UEmail'];
   $password=$_POST['PasswordL'];

   $sql="SELECT * FROM user WHERE E_mail='$username' and Password='$password'";
   $result=mysqli_query($con,$sql);
   $count =mysqli_num_rows($result);
   if($count>0){
       
       header("Location: /OVAN/indexN.php");
       

   }
   else{
       echo 'Login not sucessfully';
   }

   $con->close();

?>