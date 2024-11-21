<?php
    // connecting to database
    $server='localhost';
    $username='root';
    $password='';
    $database='EMSPESU';

    $conn=mysqli_connect($server,$username,$password,$database);
    
    // checking connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>