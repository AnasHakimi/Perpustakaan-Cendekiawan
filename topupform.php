<?php
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "library";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Get the form data
  $name = $_POST['name'];
  $id = $_POST['student_id'];
  $userType = $_POST['user'];
  $amount = $_POST['amount'];
  $status = 'pending';

  session_start();
  $_SESSION['name'] = $name;

  // Insert the data into the "topup" table
  $sql = "INSERT INTO topup (name, student_id, user, amount, status)
          VALUES ('$name', '$id', '$userType', '$amount', '$status')";

  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Successful"); window.location = "payment.php";</script>';
    exit;
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
