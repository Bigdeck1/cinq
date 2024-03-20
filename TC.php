<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASSES</title>
    <link rel="stylesheet" href="css/TC.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for Profile Image */
        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!-- Bootstrap navbar -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="image/stem1.png" width="90" height="20" class="d-inline-block align-top" alt="Logo">
    
  </a>
  <div class="navbar-nav ml-auto">
    <!-- Profile Image and Link -->
    <a class="nav-item nav-link" href="tcProfile.php">
        <img src="image/feu3.jpg" class="profile-img" alt="Profile Image">
    </a>
    <a class="nav-item nav-link" href="login.php">Logout</a>
  </div>
</nav>

<div class="container mt-4">

  <!-- Bootstrap card deck -->
  <div class="card-deck">

    <!-- Bootstrap card -->
    <div class="card">
      <a href="stem1a.php" class="container-link">
        <img class="card-img-top avatar" src="image/Nitro_Wallpaper_01_3840x2400.jpg" alt="Avatar">
        <div class="card-body text-center">
          <h5 class="card-title">ST1A</h5>
        </div>
      </a>
    </div>

    <!-- Repeat for other stem containers -->
    
    <div class="card">
      <a href="link_to_stem1b.php" class="container-link">
        <img class="card-img-top avatar" src="image/fu2.jpg" alt="Avatar">
        <div class="card-body text-center">
          <h5 class="card-title">ST1B</h5>
        </div>
      </a>
    </div>

    <!-- Repeat for other stem containers -->
    
    <div class="card">
      <a href="link_to_stem2b.php" class="container-link">
        <img class="card-img-top avatar" src="image/feu3.jpg" alt="Avatar">
        <div class="card-body text-center">
          <h5 class="card-title">ST1C</h5>
        </div>
      </a>
    </div>

        <!-- Repeat for other stem containers -->


  </div><!-- End of card deck -->

</div><!-- End of container -->

<!-- Script to handle avatar upload -->
<script src="js/avatar_upload.js"></script>

</body>
</html>
