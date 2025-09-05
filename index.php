<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FitWithAmine27 - Join Now</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h1>FitWithAmine27</h1>
  <p>Fill in your details and start your fitness journey with Amine</p>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $firstName = $_POST['firstName'];
      $lastName  = $_POST['lastName'];
      $age       = $_POST['age'];
      $height    = $_POST['height'];
      $weight    = $_POST['weight'];

      $sql = "INSERT INTO customers (firstName, lastName, age, height, weight)
              VALUES ('$firstName','$lastName','$age','$height','$weight')";
      if ($conn->query($sql) === TRUE) {
          echo "<p class='success'>✅ Your info has been submitted!</p>";
      } else {
          echo "<p class='error'>❌ Error: " . $conn->error . "</p>";
      }
  }
  ?>

  <form method="POST" class="form-box">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" required>

    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" required>

    <label for="age">Age</label>
    <input type="number" name="age" required>

    <label for="height">Height (cm)</label>
    <input type="number" name="height" required>

    <label for="weight">Weight (kg)</label>
    <input type="number" name="weight" required>

    <button type="submit">Submit</button>
  </form>
</div>
</body>
</html>
