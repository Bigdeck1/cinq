<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedules</title>
    <!-- Include CSS file -->
    <link rel="stylesheet" href="css/stem1a.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .sidebar {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 0;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .schedules-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .schedule-item {
            margin-bottom: 20px;
        }

        .schedule-item h3 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar content here -->
    <a href="TC.php">HOME</a>
    <a href="stem1astudent.php">STUDENTS</a>
    <a href="attendance.php">ATTENDANCE</a>
    <a href="stem1activities.php">ACTIVITIES</a>
    <a href="tcgrades.php">GRADE</a>
</div>

<!-- Main Content Area -->
<div class="main-content">
    <!-- Schedules Container -->
    <div class="schedules-container">
        <h2>Schedules ST-1A</h2>
        <div class="schedule-item">
            <h3>Monday</h3>
            <p>Math Class - 9:00 AM to 10:30 AM</p>
            <p>Science Class - 11:00 AM to 12:30 PM</p>
        </div>
        <div class="schedule-item">
            <h3>Tuesday</h3>
            <p>English Class - 9:00 AM to 10:30 AM</p>
            <p>History Class - 11:00 AM to 12:30 PM</p>
        </div>
        <div class="schedule-item">
            <h3>Wednesday</h3>
            <p>Art Class - 9:00 AM to 10:30 AM</p>
            <p>Physical Education - 11:00 AM to 12:30 PM</p>
        </div>
    </div>
</div>

</body>
</html>
