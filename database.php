<?php
 
    $hostName = "localhost";
    $dbUser = "id21973093_userauth";
    $dbPassword = "Databasepassword17!";
    $dbName = "id21973093_userlist";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong!");
    }

    
?>