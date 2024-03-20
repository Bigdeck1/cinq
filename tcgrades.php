<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Grades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Ensure padding is included in width */
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="stem1a.php" class="back-button">Back</a>
    <h2>Grades</h2>
    <form action="insert_grade.php" method="post">
        <label for="student">Select Student:</label>
        <select id="student" name="student" required>
            <option value="">Select a student</option>
            <!-- Add the provided students here -->
            <option value="Aira Leurcalliv">Aira Leurcalliv</option>
            <option value="Alaiza Aldea">Alaiza Aldea</option>
            <option value="Alexia Oliveros">Alexia Oliveros</option>
            <!-- Add the rest of the students -->
            <option value="Alisheba AZ Guzman">Alisheba AZ Guzman</option>
            <option value="Angela Mae Advincula Anonuevo">Angela Mae Advincula Anonuevo</option>
            <option value="Apreal Agunia">Apreal Agunia</option>
            <option value="Carl Angelo Velasquez">Carl Angelo Velasquez</option>
            <!-- Add the rest of the students -->
        </select><br><br>
        
        <label for="subject">Subject:</label>
        <select id="subject" name="subject" required>
            <option value="">Select a subject</option>
            <option value="Contemporary Philippine Arts From the Region">Contemporary Philippine Arts From the Region</option>
            <option value="Media and Information Literacy">Media and Information Literacy</option>
            <option value="Physical Education and Health 3">Physical Education and Health 3</option>
            <option value="Understanding Culture, Society and Politics">Understanding Culture, Society and Politics</option>
            <option value="English for Academic and Professional Purposes">English for Academic and Professional Purposes</option>
            <option value="Pagsulat sa Filipino sa Piling Larangan (Akademik)">Pagsulat sa Filipino sa Piling Larangan (Akademik)</option>
            <option value="General Physics 2">General Physics 2</option>
            <option value="General Chemistry 2">General Chemistry 2</option>
            <option value="General Biology 2">General Biology 2</option>
            <option value="Research Project">Research Project</option>
            <option value="Practical Research 2">Practical Research 2</option>
            <option value="Physical Education and Health 4">Physical Education and Health 4</option>
            <option value="21st Literature from the Philippines and to the World">21st Literature from the Philippines and to the World</option>
            <option value="Entrepreneurship">Entrepreneurship</option>
            <option value="Work Immersion">Work Immersion</option>
        </select><br><br>
        
        <label for="first_grading">First Grading:</label>
        <input type="text" id="first_grading" name="first_grading" required><br><br>
        
        <label for="second_grading">Second Grading:</label>
        <input type="text" id="second_grading" name="second_grading" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
