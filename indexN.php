<?php

include("/OVAN/connection.php");
include("/OVAN/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/OVAN/css/styles1.css">
    <title>Profile</title>
</head>

<body>

    <div class="wrapper">
        <div class="left">
            <img src="/OVAN/images/Profile picture.png" alt="User profile picture" width="200px">

        </div>
        <div class="right">
            <div class="info">
                <h1>Personal Information <button id="home-nav"><a href="/OVAN/index.php">Go To Home </a></button></h1>
                <div class="info_data">
                    <?php
                    
                        $con = new mysqli($dbhost = "localhost",
                        $dbuser = "root",
                        $dbpass = "",
                        $dbname ="OVAN") or die("Connection error");

                        $usernames = urldecode($_COOKIE["user"]);

                        
                        
                        
                        // Assuming you have a MySQL database table named "user" with columns "email" and "fullname"
                        $sql = "SELECT fullname FROM user WHERE username = '$usernames' ";

                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            // Fetch the result as an associative array
                            $row = mysqli_fetch_assoc($result);
                            echo '<div class="data">
                                    <h2>Fullname</h2>
                                    <p>' . $row["fullname"] . '</p>
                                  </div>';
                        } else {
                            echo '<p>No data found for the provided email.</p>';
                        }

                        // Additional details
                        $detailsSql = "SELECT email, phone, occupation, gender FROM user WHERE username = '$usernames' ";
                        $detailsResult = mysqli_query($con, $detailsSql);

                        if ($detailsResult) {
                            $detailsRow = mysqli_fetch_assoc($detailsResult);

                            echo '<div class="data">
                                    <h2>E-mail</h2>
                                    <p>' . $detailsRow["email"] . '</p>
                                  </div>';
                            echo '<div class="data">
                                    <h2>Phone number</h2>
                                    <p>' . $detailsRow["phone"] . '</p>
                                  </div>';
                            echo '<div class="data">
                                    <h2>Occupation</h2>
                                    <p>' . $detailsRow["occupation"] . '</p>
                                  </div>';
                            echo '<div class="data">
                                    <h2>Gender</h2>
                                    <p>' . $detailsRow["gender"] . '</p>
                                  </div>';
                        } else {
                            echo '<p>No additional details found for the provided email.</p>';
                        }
                    
                    ?>
                     <button onclick="destroyCookie()">Destroy Cookie</button>
                     <script>
            function destroyCookie() {
                // Set the cookie name dynamically
                var cookieName = "user"; // Assuming the cookie name is "user"

                // Check if the cookie is set
                if (document.cookie.indexOf(cookieName) !== -1) {
                    // Unset the cookie value in the current request
                    document.cookie = cookieName + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';

                    // Reload the page or redirect to ensure changes take effect
                    window.location.href = '/OVAN/index.php';
                } else {
                    alert('Cookie not set.');
                }
            }
        </script>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
