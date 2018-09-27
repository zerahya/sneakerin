<?php

$server="localhost";
$username="root";
$password="";
$database="thekingc_sneakerin_db";


// Create connection
$conn = new mysqli($server, $username, $password, $database);
$con = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>
