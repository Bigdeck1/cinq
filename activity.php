<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>  
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="activity-container">
                <h2>Posted Activities</h2>
                <a href="homepage.php" class="btn btn-secondary mb-3">Back</a> <!-- Back button -->
                <form action="complete_activity.php" method="post">
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
                    $sql = "SELECT id, title, description, due_date, attachment FROM activities";
                    $result = $conn->query($sql);

                    $activitiesExist = false; // Flag to check if activities exist

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='card mb-3'>";
                            echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
                            echo "<p class='card-text'>Description: " . $row['description'] . "</p>";
                            echo "<p class='card-text'>Due Date: " . $row['due_date'] . "</p>";
                            echo "<a href='attachments/" . $row['attachment'] . "' class='card-link'>Download Attachment</a>";
                            echo "<div class='form-group'>";
                            echo "<label for='fileUpload_" . $row['id'] . "'>Upload File:</label>";
                            echo "<input type='file' class='form-control-file' id='fileUpload_" . $row['id'] . "' name='fileUpload[]' accept='image/*,audio/*'>";
                            echo "</div>";
                            echo "<input type='checkbox' name='activity[]' value='" . $row['id'] . "' class='mr-2'>";
                            echo "</div>";
                            echo "</div>";
                            // Set the flag indicating that activities exist
                            $activitiesExist = true;
                        }
                    } else {
                        echo "No activities found";
                    }
                    $conn->close();
                    ?>
                    <?php if ($activitiesExist): ?>
                        <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Complete Selected Activities</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Function to enable or disable the submit button based on whether a file is selected
    $(document).ready(function() {
        $('input[type="file"]').on('change', function() {
            var fileInput = $(this);
            var submitBtn = $('#submitBtn');
            if (fileInput.get(0).files.length > 0) {
                submitBtn.prop('disabled', false);
            } else {
                submitBtn.prop('disabled', true);
            }
        });
    });
</script>
</body>
</html>
