
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Form</title>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/stem1activities.css">
</head>
<body>
    <div class="container">
    <div class="activity-form-container">
        <a class="back-button" href="stem1astudent.php">Back</a>
        <h2>Activity Form</h2>
    <form action="submit_activity.php" method="post" enctype="multipart/form-data">
        <label for="assignmentTitle">Assignment Title:</label><br>
        <input type="text" id="assignmentTitle" name="assignmentTitle" required><br>
        <label for="assignmentDescription">Assignment Description:</label><br>
        <textarea id="assignmentDescription" name="assignmentDescription" required></textarea><br>
        <label for="dueDate">Due Date:</label><br>
        <input type="date" id="dueDate" name="dueDate" required><br>
        <label for="fileUpload">Attach File:</label><br>
        <input type="file" id="fileUpload" name="fileUpload"><br><br>
        <input type="submit" value="Submit Assignment" class="btn btn-primary">
    </form>
    </div>

    <div class="activity-list-container">
    <h2>Posted Activities</h2>
        <?php
                         // PHP code to fetch and display posted activities 
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

// SQL query to fetch activities from the database
$sql = "SELECT title, description, due_date, attachment FROM activities";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='activity-item'>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>Description: " . $row['description'] . "</p>";
        echo "<p>Due Date: " . $row['due_date'] . "</p>";
        echo "<a href='attachments/" . $row['attachment'] . "'>Download Attachment</a>";
        echo "</div>";
    }
} else {
    echo "No activities found";
}
$conn->close();
        ?>
        <!-- Example activity items (replace with dynamic PHP code above) -->
        <!-- Add more activity items as needed -->
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
