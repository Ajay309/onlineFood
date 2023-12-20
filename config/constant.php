<?php

session_start();
define('SITEURL', 'http://localhost/onlinefood/');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'onlinefood');

// Try connecting to the Database

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); 

// Check for the Connection

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
    } 
?>