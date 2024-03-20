<?php
// Check if the form is submitted
if (isset($_POST['submitAttendance'])) {
    // Database connection parameters
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitAttendance'])) {
    // Validate and sanitize input
    $attendanceDate = $_POST['attendanceDate'];
    $students = $_POST['student'];
    $attendanceStatus = $_POST['attendance_status'];

    // Prepare and execute SQL statement to insert attendance records
    $stmt = $conn->prepare("INSERT INTO attendance (student_name, attendance_date, attendance_status) VALUES (?, ?, ?)");

    // Bind parameters and execute the statement for each student
    foreach ($students as $student) {
        $status = $attendanceStatus[$student];
        $stmt->bind_param("sss", $student, $attendanceDate, $status);
        $stmt->execute();
    }

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();

    // Redirect to a success page or do other operations as needed
    header("Location: attendance.php");
    exit();
}
}
?>
