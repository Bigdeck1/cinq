








/teacher_dashboard
|-- css
|   |-- style.css
|-- js
|   |-- dashboard.js
|-- includes
|   |-- db.php
|-- index.php
|-- login.php
|-- dashboard.php
|-- create_class.php
|-- create_course.php
|-- view_classes.php
|-- view_courses.php
|-- gradebook.php
|-- attendance.php
|-- announcements.php
|-- settings.php
|-- resources.php



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="teacher_dashboard.css">
    <link rel="stylesheet" href="loginform.css">
</head>

<body>
    
<div class="overlay" id="overlay" onclick="closeSidebar()"></div>
        <button class="toggle-btn" onclick="toggleSidebar()">MENU</button>


        <div class="sidebar" id="sidebar">
            <h2>.</h2>
            <a href="student.php">Student</a>

            <a href="ggrades.php">Grades</a>
            <a href="student.php">Student</a>
            <a href="subjects.php">Subjects</a>
            <a href="activity.php">To do</a>
            <a href="classes.php">Organizations</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href= login.php>Logout</a>

        </div>

    <div class="dashboard-container">
        <h2>Teacher Dashboard</h2>

        <form action="post_activity.php" method="post" enctype="multipart/form-data">
            <label for="title">Activity Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Activity Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="deadline">Deadline:</label>
            <input type="datetime-local" id="deadline" name="deadline" required>

            <label for="attachment">Attachment:</label>
            <input type="file" id="attachment" name="attachment">

            <button type="submit">Post Activity</button>
        </form>
    </div>

</body>

</html>
