<?php
// Start a session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  // The user is already logged in, show an error message
  echo '<script>alert("You have already logged in!"); window.location = "index.php";</script>';
  exit;
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $staffid = $_POST['staff_id'];
  $password = $_POST['password'];

  // Connect to the database
  $db = new mysqli('localhost', 'root', '', 'library');

  // Check if the username and password are correct
  $result = $db->query("SELECT * FROM admin WHERE staff_id = '$staffid' AND password = '$password'");
  if ($result->num_rows > 0) {
    // Login was successful, start a session and redirect to the next page
    $_SESSION['logged_in'] = true;
    $_SESSION['staff_id'] = $staffid;
    echo '<script>alert("Successful login!"); window.location = "index.php";</script>';
    exit;
  } else {
    // Login failed, show an error message
    echo '<script>alert("Incorrect id or password!"); window.location = "admin.php";</script>';
  }
}

?>