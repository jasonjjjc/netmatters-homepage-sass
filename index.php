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

<?php include 'partials/head.php'; ?>

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