<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dept"; // Database name to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
//echo "Connected successfully";
