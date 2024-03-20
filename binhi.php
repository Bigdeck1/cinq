<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINHI</title>
    <style>
        body {
            position: relative;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.2s; /* Added transition for smooth animation */
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: transform 0.2s; /* Added transition for smooth animation */
        }

        img:hover {
            transform: scale(1.05); /* Slightly scales up the image on hover */
        }

        .back-button {
            position: absolute;
            top: 10px; /* Adjusted to top position */
            left: 10px; /* Adjusted to left position */
            padding: 8px 16px;
            font-size: 16px;
            background-color: #ccc;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
            z-index: 1;
            /* Ensure it appears above other elements */
        }

        .back-button:hover {
            background-color: #999;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="image/binhi.jpg" alt="STEM Society">
        <p>The "Binhi", our esteemed official Environmental Club, welcomes the  newly inducted officers. These dedicated students have taken an oath, embracing their roles and responsibilities with a commitment to our environment and the future of SCAS. We are looking forward to the positive change and initiatives they will bring to our club.</p>
    </div>

    <a href="organization.php" class="back-button">&lt; Back</a>
</body>
</html>
