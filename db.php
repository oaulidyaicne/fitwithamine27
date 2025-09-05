<?php
$host = "localhost";
$user = "root";        // غيرها إذا استعملت يوزر آخر
$pass = "123456";      // كلمة السر لي درتها للـ MySQL
$db   = "fitwithamine27";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
