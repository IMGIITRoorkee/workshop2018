<?php
    // name of the server
    $servername = "localhost";

    // username of the user
    $username = "test";
    
    // password of the mysql user
    $password = "test";
    
    // database that is being used
    $db = "workshop";
    
    // Establishing a connection between PHP and MySQL
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Checking for a connection error
    if($conn->connect_error){
        die("Connection failed:" . $conn->connect_error);
    }
?>