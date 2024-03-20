<?php
// Establish connection to the MySQL database
$servername = "localhost";
$username = "root"; // 
$password = ""; 
$dbname = "rename"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the to-do item from the POST request
$data = json_decode(file_get_contents("php://input"), true);
$todoItem = $data['todo'];

// Prepare and execute SQL statement to insert the to-do item into the database
$sql = "INSERT INTO todo_items (item) VALUES ('$todoItem')";
if ($conn->query($sql) === TRUE) {
    echo "To-do item saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
