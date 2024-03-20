<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Sumulong Family</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        /* Additional custom styles can be added here */
        /* The existing styles are maintained for the image and button */
        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Back to Homepage button -->
        <a href="homepage.php" class="btn btn-primary mt-3 ml-3">Back to Homepage</a>

        <!-- Image and about text -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img id="familyImage" src="image/feu3.jpg" alt="Sumulong Family Image" class="img-fluid mb-3">
                <p id="aboutText" class="text-center">
                    The Sumulong Family of Antipolo City, known for excellence, integrity, and service, has a rich legacy of leadership, from Don Juan Sumulong to Senator Lorenzo Sumulong and Mayor Victor R. Sumulong. Their commitment to education led to the establishment of Sumulong College of Arts and Sciences, providing affordable and relevant tertiary education to the youth. The college aims to uphold the family's values of excellence and service, shaping dreams and changing lives.
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Random about text array
        var aboutTexts = [
            "The Sumulong Family of Antipolo City, known for excellence, integrity, and service, has a rich legacy of leadership, from Don Juan Sumulong to Senator Lorenzo Sumulong and Mayor Victor R. Sumulong. Their commitment to education led to the establishment of Sumulong College of Arts and Sciences, providing affordable and relevant tertiary education to the youth. The college aims to uphold the family's values of excellence and service, shaping dreams and changing lives.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper massa quis dui tristique, vitae ultricies leo mattis. Nullam in consequat nulla. Nam ut nisl efficitur, scelerisque orci a, tincidunt lectus. Fusce vestibulum euismod justo.",
            "Vestibulum volutpat efficitur ligula, sit amet posuere urna scelerisque vel. Aliquam ut est ut libero aliquet malesuada. Cras eget velit in leo aliquet placerat. Maecenas in nulla neque."
        ];

        // Get random index for aboutTexts array
        var randomIndex = Math.floor(Math.random() * aboutTexts.length);

        // Set random about text
        document.getElementById("aboutText").innerText = aboutTexts[randomIndex];
    </script>
</body>
</html>
