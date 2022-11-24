<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = "";
    $dbname = 'fms';
    $conn = new mysqli($hostname, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: ". mysqli_connect_error());
    }
?>