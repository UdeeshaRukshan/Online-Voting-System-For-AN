<html>
    <head>
        <title></title>
        <style>
 body{
    background-color:gray;
 }
input{
color:red;    
}

        </style>
</head>
<body>

<form action="" method="POST">
Name:<input type="text" name="username">
<input type="submit" name="update" class="input-5" >

</form>

</body>
</html>


<?php

$conn=mysqli_connect("localhost", "root", "", "contact_us_form");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

$username=$_POST['username'];
$result = mysqli_query($conn,"SELECT * FROM contact_us");

$sql = "DELETE FROM contact_us WHERE username='" . $_POST["username"] . "'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>