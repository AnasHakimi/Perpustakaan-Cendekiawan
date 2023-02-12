<?php
    //connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

     $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //validate status
    $status = $_POST["status"];
    if($status !== "complete"){
        echo "Invalid status";
        exit();
    }
    //update status in database
    $id = $_POST["id"];
    $sql = "UPDATE register SET status='$status' WHERE id='$id'";
    $conn->query($sql);
    $conn->close();
    //redirect back to the original page
    header("Location: register.php");
?>