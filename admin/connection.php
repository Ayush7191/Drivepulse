<?php 
    // Database connection
$host = 'localhost'; // or the IP address of your server
$dbUsername = 'root'; // your database username
$dbPassword = ''; // your database password
$dbname = 'drivepulse'; // name of your database

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>