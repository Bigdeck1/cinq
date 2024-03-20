<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Student Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        section {
            margin: 20px;
        }

        .student {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .student li {
            margin-bottom: 10px;
        }

        .student hr {
            margin: 5px 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        #back-button {
            margin-top: 10px;
            color: #333;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #eee;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <a href="homepage.php" id="back-button" class="btn btn-light">&lt; Back</a>
    <header>
        <h1>Student Information</h1>
    </header>

    <section id="studentData" class="container">
        <h2>Student Information</h2>

        <div class="student">
            <!-- Additional Student Information -->
            <ul class="list-unstyled">
                <li>Name: Jane Doe</li>
                <hr>
                <li><strong>Sex:</strong> Female</li>
                <hr>
                <li><strong>Age:</strong> 16</li>
                <hr>
                <li><strong>Religion:</strong> Christianity</li>
                <hr>
                <li><strong>Civil Status:</strong> Single</li>
                <hr>
                <li><strong>Ethnic Group:</strong> Asian</li>
                <hr>
                <li><strong>Nationality:</strong> American</li>
                <hr>
                <li><strong>Birth Date:</strong> 2005-03-10</li>
                <hr>
                <li><strong>Birth Place:</strong> Cityville</li>
                <hr>
                <li><strong>LRN:</strong> 1234567890</li>
                <hr>
                <li><strong>Contact number of student:</strong> +1 (555) 987-6543</li>
                <hr>
                <li><strong>Height:</strong> 160 cm</li>
                <hr>
                <li><strong>Weight:</strong> 55 kg</li>
                <hr>
                <li><strong>Address:</strong> 456 Park Ave, Townsville, Stateville, 67890</li>
                <hr>

                <!-- Father's Information -->
                <li><strong>Father's Name:</strong> John Doe Sr.</li>
                <hr>
                <li><strong>Address:</strong> 789 Oak St, Villagetown, Stateville, 34567</li>
                <hr>
                <li><strong>Contact Number:</strong> +1 (555) 765-4321</li>

                <hr>

                <!-- Mother's Information -->
                <li><strong>Mother's Name:</strong> Mary Doe</li>
                <hr>
                <li><strong>Address:</strong> 789 Oak St, Villagetown, Stateville, 34567</li>
                <hr>
                <li><strong>Contact Number:</strong> +1 (555) 765-4321</li>
                
                <hr>

                <!-- Guardian's Information -->
                <li><strong>Guardian's Name:</strong> Alice Johnson</li>
                <hr>
                <li><strong>Address:</strong> 123 Pine St, Hilltown, Stateville, 23456</li>
                <hr>
                <li><strong>Contact Number:</strong> +1 (555) 876-5432</li>
            </ul>
        </div>

        <!-- Add more student profiles as needed -->

    </section>

    <footer class="fixed-bottom">
        <div class="container">
            <p>&copy; 2024 CINQ. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
