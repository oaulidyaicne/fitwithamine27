<?php
session_start();
include "db.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT * FROM customers ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FitWithAmine27 - Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h1>Customer Submissions</h1>
  <a href="logout.php" style="color:#ff6600;">Logout</a>
  <div class="list">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='customer-card'>
                    <h3>{$row['firstName']} {$row['lastName']}</h3>
                    <p>Age: {$row['age']}</p>
                    <p>Height: {$row['height']} cm</p>
                    <p>Weight: {$row['weight']} kg</p>
                    <small>Submitted: {$row['created_at']}</small>
                  </div>";
        }
    } else {
        echo "<p>No submissions yet.</p>";
    }
    ?>
  </div>
</div>
</body>
</html>
