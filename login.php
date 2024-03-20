<?php
session_start();

// Include database connection
require_once "includes/db.php";

// include functions for security measures
include 'includes/functions.php';

// Check if the user is already logged in
if(isset($_SESSION["user_id"])) {
    // Redirect logged-in users to the dashboard
    header("Location: dashboard.php");
    exit;
}

// Initialize variables
$username = $password = "";
$errors = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Get user input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
                    // Login successful
            $_SESSION['username'] = $username;

            // Redirect based on role
            if ($row['role'] == 'student') {
                header("Location: homepage.php");
            } elseif ($row['role'] == 'teacher') {
                header("Location: TC.php");
            } elseif ($row['role'] == 'admin') {
                header("Location: admindashboard.php");    
            } else {
                // Default redirect if role is not specified or unrecognized
                header("Location: welcome.php");
            }
            exit();
        } else {
            // Invalid password
            $error = "Invalid password";
        }
    } else {
        // User not found
        $error = "User not found";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/loginf.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login Form</h2>
                        <?php if(isset($error)) { echo '<p class="text-danger text-center">' . $error . '</p>'; } ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember-me">
                                <label class="form-check-label" for="remember-me">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <div class="mt-3 text-center">
                            <p>Forgot your password? <a href="#">Reset here</a></p>
                            <p>Don't have an account? <a href="register.php">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


