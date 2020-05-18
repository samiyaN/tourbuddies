<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "travel_buddies";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword,  $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
