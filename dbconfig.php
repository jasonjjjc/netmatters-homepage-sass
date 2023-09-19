<?php
$host = "localhost";
$dbname = "nm-contact-us";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Handle connection error properly here.
    // In a production environment, don't display $e->getMessage() to the end user.
    die("Connection failed: " . $e->getMessage());
}
?>
