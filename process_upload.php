<?php
session_start();

// Assuming you have already established a connection to your MySQL database
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

// Check if the user is logged in and has a student role
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Query to check the user's role
    $checkRoleQuery = "SELECT role FROM users WHERE id = $user_id";
    $roleResult = $conn->query($checkRoleQuery);

    if ($roleResult->num_rows > 0) {
        $row = $roleResult->fetch_assoc();
        $userRole = $row['role'];

        // If the user is a student, insert completed activities
        if ($userRole == 'student') {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['activity']) && is_array($_POST['activity'])) {
                    $student_id = $user_id; // Use user_id as student_id
                    foreach ($_POST['activity'] as $activity_id) {
                        $sql = "INSERT INTO completed_activities (student_id, activity_id) VALUES ($student_id, $activity_id)";
                        if ($conn->query($sql) !== TRUE) {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                }
            }
        } else {
            echo "Only students can complete activities.";
        }
    } else {
        echo "User role not found.";
    }
} else {
    echo "User not logged in.";
}

$conn->close();
?>
