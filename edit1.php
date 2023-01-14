<!DOCTYPE html>



<html lang="en">
<head>
<style>
body{
    background-color:gray;
}
form{
    padding:60px 80px;
    border:6px solid red;
    font-family: cursive;
    font-size: 20px;

}
.headM{
 text-align:center;
 font-weight:bold;
 font-size:30px;
}
</style>

</head>
    <body>
        <h1 class="headM">EDIT</h1>
        <form action="edit1.php" method="post">
        
        Your name: <br> <input type="text" name="username" placeholder="name"  class="input-1" required><br>
    
       Mobile Number: <br>
       <input type="phone" name="mobile"  pattern="[0-9]{10}" placeholder="1234567890" class="input-3" required> <br/>
       E-mail:<br/>
            <input type="email" name="email" placeholder="abc@gmail.com"  class="input-4" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> <br><br/>
       Gender:<br/><br>
            <input type="radio" value="Male" name="gender" checked> Male 
            <input type="radio"  value="Female" name="gender">Female <br/><br/>     
       <p>Put your feedback here</p><br>
        <textarea name="feedback" id="text-area" cols="30" rows="10" required></textarea><br>

        <br><input type="checkbox" class="inputStyle" id="checkBox"  > Accept privacy policy and terms.<br/><br/>

        <input type="submit" name="update" class="input-5" >
        
        <?php

$link = mysqli_connect("localhost", "root", "", "contact_us_form");
  
if(!$link){
    die('Could not Connect My Sql:' .mysql_error());
 }

if(count($_POST)>0) {
    mysqli_query($link,"UPDATE contact_us SET username='" . $_POST['username'] . "', mobile='" . $_POST['mobile'] . "',email='" . $_POST['email'] . "', gender='" . $_POST['gender'] . "' ,feedback='" . $_POST['feedback'] . "' WHERE username='" . $_POST['username'] . "'");
    $message = "Record Modified Successfully";
    }
    $result = mysqli_query($conn,"SELECT * FROM contact_us WHERE username='" . $_GET['username'] . "'");
    $row= mysqli_fetch_array($result);
    ?>
        </form>




</body>
</html>