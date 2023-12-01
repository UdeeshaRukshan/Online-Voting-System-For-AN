

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href= "/OVAN/css/stylesReg.css">
    </style>
    <script src="/OVAN/js/script.js"></script>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form id ="form"  method ="post" action="">
            <div class="user-details">
                <div class="input-box">
                    <span class = "details">Full Name</span>
                    <input type ="text" id ="fullname" name ="fullname" placeholder = "Enter your full name" required >
                    <p class="error-text">Your name is required</p>
                </div>
                <div class="input-box">
                    <span class = "details">User name</span>
                    <input type ="text" id ="username" name="username" placeholder = "Enter a User name" required>
                    <p class="error-text">user name is required</p>
                </div>
                <div class="input-box">
                    <span class = "details">Occupation</span>
                    <input type ="text" id ="occupation" name="occupation" placeholder = "Enter a Occupation" required>
                    <p class="error-text">Occupation is required</p>
                </div>
                <div class="input-box">
                    <span class = "details">E-mail</span>
                    <input type ="email" id ="email" placeholder = "Enter your E-mail" name ="email" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required >
                    <p class="error-text">E-mail is required</p>
                </div>
                <div class="input-box">
                    <span class = "details">Phone number</span>
                    <input type ="tel" id ="phoneNumber" name ="phone" placeholder = "Enter your Phone number" pattern="[0-9]{10}" required>
                    <p class="error-text">Phone number is required</p>
                </div>
                <div class="gender-details">
                <input type ="radio"  name="gender" id="dot-1" value ="Male" >
                <input type ="radio"  name="gender" id="dot-2" value ="Female">
                <span class = "Gender-title">Gender</span>
                <div class="category">
                    <Label for ="dot-1">
                        <span class = "dot one"></span>
                        <span class = "gender">Male</span> 
                    </Label>
                    <Label for ="dot-2">
                        <span class = "dot two"></span>
                        <span class = "gender">Female</span>
                    </Label>
                </div>
                </div>
    </br>
                <div class = "input-box">
                    <span class = "details">Date of birth</span>
                    <input type = "date" id ="dob" name ="dob" required>
                    <p class="error-text">DOB is required</p>
                </div>
    </br>
    
                <div class="input-box">
                    <span class = "details">Password</span>
                    <input type ="password" id="password" name ="password" placeholder = "Enter a Password" required>
                    <p class="error-text">Please enter atlease 8 characters with numbers, symbols small and capital letters.</p>
                </div>
                <div class="input-box">
                    <span class = "details">Confirm Password</span>
                    <input type ="password" id ="password2"placeholder = "Confirm Password" required>
                    <p class="error-text">Password is not matching</p>
                </div>
              
            </div>
            <div class="button">
                <input type ="submit" id="submitBTN" name="submit" value ="Register">
            </div>
        </form>
        Already a member? <a href = "/OVAN/login.php">Log in</a>
    </div>
    <?php
  
   
     
    

     $con=new mysqli("localhost","root","","OVAN");
     if($con->connection_error){
         die("Connection failed:".$con->connection_error);
     }
      
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $occupation = $_POST['occupation'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $password =$_POST['password'];
        $dob = $_POST['dob'];

        if(isset($_POST['submit'])){
            
            $query = "INSERT INTO user VALUES ('$fullname','$username','$occupation','$email','$phone','$gender','$password','$dob')";

            mysqli_query($con,$query);

            header('Location: /OVAN/login.php');
            
        }
       
     
?>
</body>
</html>