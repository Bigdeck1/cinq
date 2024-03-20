<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["activity"])) {
    // PHP code to process completed activities
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

    // Escape user inputs for security
    $completedActivities = array_map(function($activity) use ($conn) {
        return intval($conn->real_escape_string($activity));
    }, $_POST["activity"]);

    // Prepare SQL statement to update activity status
    $sql = "UPDATE activities SET status = 'completed' WHERE id IN (" . implode(",", $completedActivities) . ")";

    if ($conn->query($sql) === TRUE) {
        echo "Selected activities marked as completed successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
