<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new MySQLi($servername, $username, $password, "article directory");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>