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

// SQL query to retrieve grades
$sql = "SELECT subject, first_grading, second_grading FROM grades";
$result = $conn->query($sql);

$grades = []; // Array to store grades

// Check if there are any results
if ($result && $result->num_rows > 0) {
    // Fetch each row and store the data in the $grades array
    while ($row = $result->fetch_assoc()) {
        $grades[] = $row;
    }
} else {
    echo "No grades found.";
}

$conn->close(); // Close the database connection
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Sheet</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            padding: 20px;
        }

        .grade-table {
            max-width: 800px;
            margin: 0 auto;
        }

        .grade-table th,
        .grade-table td {
            padding: 10px;
            text-align: center;
        }

        .back-button {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Back Button -->
        <a href="homepage.php" class="btn btn-primary back-button">Back to Homepage</a>

        <h2 class="text-center mb-4">Grade shit</h2>

        <table class="table table-bordered grade-table">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>1st Grading</th>
                    <th>2nd Grading</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($grades as $grade) : ?>
                    <tr>
                        <td><?php echo $grade['subject']; ?></td>
                        <td><?php echo $grade['first_grading']; ?></td>
                        <td><?php echo $grade['second_grading']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
