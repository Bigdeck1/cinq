<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include custom CSS file -->
    <link rel="stylesheet" href="css/stem1astudent.css">
<style>
        /* Custom CSS */
        .custom-circle {
            position: relative;
            top: 4px; /* Adjust the top position to move the circles */
            margin-right: 5px; /* Add margin to separate circles */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1><a href="stem1a.php">ATTENDANCE</a></h1>
        <div class="attendance-container">
            <form action="process_attendance.php" method="post">
                <div class="form-group">
                    <label for="attendanceDate">Date:</label>
                    <input type="date" class="form-control" id="attendanceDate" name="attendanceDate" required>
                </div>
                <ul class="list-group">
                    <!-- PHP loop to generate student list -->
                    <?php
                    $students = [
                        "Aira Leurcalliv", "Alaiza Aldea", "Alexia Oliveros", "Aliah Zapanta", "Alisheba AZ Guzman",
                        "Angela Mae Advincula Anonuevo", "Apreal Agunia", "Carl Angelo Velasquez", "Carl Renzo", "Cassandra Conge",
                        "Charlie Kin Flores", "Isabel Carla Cativo", "Chesca Sinforoso", "Clark Magpantay", "Danycha Marte",
                        "Desiree Yvonne Gilbolingo", "Eleah Languido", "Elle Altarejos", "Fionah Crizelle Ramos", "Hazel Ann",
                        "Jake French Omega"
                    ];
                    foreach ($students as $student) {
                        echo "<li class='list-group-item'>
                            <input type='hidden' name='student[]' value='$student'>
                            <label for='attendance_$student'>$student</label>
                            <input type='radio' id='present_$student' name='attendance_status[$student]' value='present'>
                            <label for='present_$student'>Present</label>
                            <input type='radio' id='late_$student' name='attendance_status[$student]' value='late'>
                            <label for='late_$student'>Late</label>
                            <input type='radio' id='absent_$student' name='attendance_status[$student]' value='absent' checked>
                            <label for='absent_$student'>Absent</label>
                        </li>";
                    }
                    ?>
                </ul>
<input type="submit" class="btn btn-primary mt-3" name="submitAttendance" value="Submit Attendance">
            </form>
        </div>
    </div>
</body>
</html>
