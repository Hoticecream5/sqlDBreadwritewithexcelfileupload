<?php
    $host = "localhost";
    $username = "u362373351_jeremiahl";
    $password = "1trustTh3e*";
    $database = "u362373351_127_0_1_1";

    // Create DB Connection
    $con = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>