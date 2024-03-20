<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database servername
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "Rename_teachers"; // Change this to your database name

// Create connection
$conn_teachers = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn_teachers->connect_error) {
    die("Connection failed: " . $conn_teachers->connect_error);
}
?>
