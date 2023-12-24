<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Display Student Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      text-align: center;
    }
    .table {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
    if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
        unset($_SESSION['errors']);
        exit();
    }

    if (isset($_SESSION['formData'])) {
        $formData = $_SESSION['formData'];
        echo "<h2>Student Information</h2>";
        echo "<table class='table table-hover table-striped'>";
        echo "<thead class='thead-dark'>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($formData as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
        unset($_SESSION['formData']);
    } else {
        echo "<p>No data to display</p>";
    }
    ?>
  </div>
</body>
</html>
