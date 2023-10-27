<?php
$errors = [];
if (isset($_GET['errors'])) {
  $errors = json_decode(urldecode($_GET['errors']), true);
}

$formData = [];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $formData = $_GET;
  // Remove 'errors' from the form data as it's not a field
  unset($formData['errors']);
  // Remove 'success' from the form data if it's there
  if (isset($formData['success'])) {
    unset($formData['success']);
  }
}
$success = false;
if (isset($_GET['success']) && $_GET['success'] == 'true') {
  $success = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body>
  <?php include 'partials/sidenav.php'; ?>

  <div id="container">

    <?php include 'partials/header.php'; ?>

    <main id="main">
      <?php include 'partials/breadcrumbs.php'; ?>
      <?php include 'partials/page-head.php'; ?>
      <?php include 'partials/office-addresses.php'; ?>
      <?php include 'partials/contact-info-form.php'; ?>
      <?php include 'partials/newsletter.php'; ?>
      <?php include 'partials/footer.php'; ?>
    </main>

    <?php include 'partials/crumb-overlay.php'; ?>
  </div>
</body>

</html>