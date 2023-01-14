<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<style>
body{
background-color:gray;

}
td{
    color:black;
}
table{
    text-align:center;
    border: 6px solid red;
    margin-left: 10%;
    font-family: cursive;
    font-size: 30px;
}

</style>
</head>
<body>
<?php



$con=new mysqli("localhost","root","","contact_us_form");
if($con->connection_error){
    die("Connection failed:".$con->connection_error);
}

$sql="SELECT * FROM contact_us";

$result=$con->query($sql);

if($result->num_rows>0){
    echo ("<table border='1'>");
    echo "<tr>
    <td>"."Username"."</td>
    <td>"."Mobile"."</td>
    <td>"."Email"."</td>
    <td>"."Gender"."</td>
    <td>"."Feedback"."</td>
    <td>"."Update"."</td>
    
    </tr>";
    while($row=$result->fetch_assoc()){
        echo ("<tr>");
    echo ("<td>". $row['username']. "</td>");
    echo("<td>" .$row['mobile']."</td>");
    echo ("<td>" . $row['email'] . "</td>");
    echo("<td>" .$row['gender']."</td>");
    echo ("<td>".$row['feedback']."</td>");
    echo ("<td>"."<a href='edit1.php?id=$row[id]'>Edit</a>|<a href='delete.php?id=$row[id]'>Delete</a>");
        echo ("</tr>");
        echo("<br>");
    }
    echo ("</table>");


}
else{
    echo "no_result!";
}
$con->close();

?>
</body>
</html>
