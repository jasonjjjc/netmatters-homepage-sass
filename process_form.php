<?php

require 'db_connection.php';

$errors = [];

// Validate inputs and store errors in $errors array
if (empty($_POST['name'])) {
    $errors['name'] = true;
}

$emailPattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";
if (empty($_POST['email']) || !preg_match($emailPattern, $_POST['email'])) {
    $errors['email'] = true;
}

$phonePattern = "/^\d+$/";
if (empty($_POST['telephone']) || !preg_match($phonePattern, $_POST['telephone'])) {
    $errors['telephone'] = true;
}

if ($_POST['message'] == 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?') {
    $errors['message'] = true;
}

// If there are validation errors, redirect back to the form with error messages and previously entered data
if (!empty($errors)) {
    $formData = http_build_query($_POST);
    header('Location: contact.php?errors=' . urlencode(json_encode($errors)) . '&' . $formData . '#contact-form');
    exit;
}


// Insert into database
$marketing = isset($_POST['marketing-preference']) ? 1 : 0;

$stmt = $pdo->prepare("INSERT INTO contacts (name, company, email, telephone, message, marketing) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->execute([$_POST['name'], $_POST['company'], $_POST['email'], $_POST['telephone'], $_POST['message'], $marketing]);

header('Location: contact.php?success=true#contact-form');

exit;

?>
