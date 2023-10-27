<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "netmatters";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Full service digital agency offering software & web development, software integration, digital marketing, IT, Telecoms & Cyber Security to drive results for your business." name="description" property="description" />
  <title>
    Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters
  </title>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,600&display=swap" rel="stylesheet" />
  <link href="assets/favicon.ico" rel="shortcut icon" />
  <!-- jQuery -->
  <script src="js/jquery-2.2.4.min.js"></script>

  <!-- Slick carousel -->
  <link href="slick/slick.css" rel="stylesheet" type="text/css" />
  <link href="slick/slick-theme.css" rel="stylesheet" type="text/css" />
  <script src="slick/slick.min.js"></script>

  <!--My own styles and javascript below here-->
  <link href="./css/styles.css" rel="stylesheet" />
  <script src="js/main.js"></script>
</head>

<body>
  <?php include 'partials/sidenav.php'; ?>
  <div id="container">
    <div id="cover"></div>
    <?php include 'partials/header.php'; ?>
    <main id="main">
      <?php include 'partials/hero.php'; ?>
      <?php include 'partials/our-services.php'; ?>
      <?php include 'partials/company.php'; ?>
      <?php include 'partials/latest-news.php'; ?>
      <?php include 'partials/newsletter.php'; ?>
      <?php include 'partials/footer.php'; ?>
    </main>
    <?php include 'partials/crumb-overlay.php'; ?>
    
  </div>
</body>

</html>