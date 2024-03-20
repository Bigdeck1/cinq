<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .organization-box {
            max-width: 300px;
            margin: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.2s;
        }

        .organization-box:hover {
            transform: scale(1.05);
        }

        .organization-box img {
            max-width: 100%;
            max-height: 150px;
            /* Adjust the height as needed */
            border-radius: 8px;
            margin: 15px 0;
        }

        .organization-box p {
            color: #555;
            margin-bottom: 15px;
        }

        .learn-more {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .learn-more:hover {
            background-color: #640509;
            color: #fff;
        }

        .back-button {
            position: absolute;
            /* Position the button relative to the nearest positioned ancestor */
            top: 10px;
            /* Distance from the top of the viewport */
            left: 10px;
            /* Distance from the left of the viewport */
            padding: 8px 16px;
            /* Medium padding */
            font-size: 16px;
            /* Medium font size */
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
        <h2>Organizations</h2>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="organization-box">
                    <h3>SCAS THE COLD CATS</h3>
                    <img src="image/409058694_880492007415149_5326327473574518777_n.jpg" alt="Organization Logo">
                    <p>THE RISE OF THE BLUES</p>
                    <a href="scasdnl.php" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="organization-box">
                    <h3>STEM SOCIETY OF SCACS</h3>
                    <img src="image/stemsociety.jpg" alt="Organization Logo">
                    <p>TRUST YOURSELF</p>
                    <a href="stemsociety.php" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="organization-box">
                    <h3>THE PEREGRINE</h3>
                    <img src="image/peregrine.jpg" alt="Organization Logo">
                    <p>Pag-ibig sa bayan at pag-ibig sa kaniya </p>
                    <a href="theperegrine.php" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="organization-box">
                    <h3>INDAK GALAW</h3>
                    <img src="image/indak.jpg" alt="Organization Logo">
                    <p>PASSION ALWAYS COME WITH A GREAT PERSPECTIVE</p>
                    <a href="indakgalaw.php" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="organization-box">
                    <h3>BINHI</h3>
                    <img src="image/binhi.jpg" alt="Organization Logo">
                    <p>Let the Justice and Peace Flow in Green Movement</p>
                    <a href="binhi.php" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="organization-box">
                    <h3>MARILAG</h3>
                    <img src="image/marilag.jpg" alt="Organization Logo">
                    <p>Innovation, Leadership, Passion!</p>
                    <a href="marilag.php" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
    <a href="homepage.php" class="back-button">&lt; Back to Home</a>
</body>

</html>
