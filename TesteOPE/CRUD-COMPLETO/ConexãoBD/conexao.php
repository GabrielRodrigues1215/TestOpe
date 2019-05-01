<?php
$servername = "localhost";
$username = "id9421485_adim";
$password = "123456";
$dbname = "id9421485_testbd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
