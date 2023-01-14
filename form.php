<?php 



$con=new mysqli("localhost","root","","contact_us_form");
if($con->connection_error){
    die("Connection failed:".$con->connection_error);
}


$username=$_POST["username"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$feedback=$_POST["feedback"];

if(isset($_POST['submit'])){
$sql="INSERT INTO contact_us VALUES('$username','$mobile','$email','$gender','$feedback')";
}
if($con->query($sql)){
    
    echo "Inserted sucessfully";

}
else{

    echo "Error:".$con->error;

}

$result=$con->query($sql);

echo "$result";

$con->close();

