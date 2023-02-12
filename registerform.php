<?php
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "library";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$student_id = $_POST['student_id'];
$email = $_POST['email'];
$user = $_POST['user'];
$amount = $_POST['amount'];
$status = 'pending';

session_start();
  $_SESSION['name'] = $name;

// Insert data into the register table
$sql = "INSERT INTO register (name, student_id, email, user, amount, status)
        VALUES ('$name', '$student_id', '$email', '$user', '$amount','$status')";


  if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Data inserted successfully"); window.location = "payment2.php";</script>';
    exit;
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
