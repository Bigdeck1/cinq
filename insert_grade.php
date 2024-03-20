<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rename";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$subject = $_POST['subject'];
$first_grading = $_POST['first_grading'];
$second_grading = $_POST['second_grading'];

// Insert data into the grades table
$sql = "INSERT INTO grades (subject, first_grading, second_grading) VALUES ('$subject', '$first_grading', '$second_grading')";

if ($conn->query($sql) === TRUE) {
    echo "Grades inserted successfully!"; // Display success message
    // Redirect back to tcgrades.php after 2 seconds
    echo '<script>setTimeout(function(){ window.location.href = "tcgrades.php"; }, 2000);</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
