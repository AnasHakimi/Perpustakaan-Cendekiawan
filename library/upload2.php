<?php
session_start();

if(isset($_POST['submit'])) {
    $file = $_FILES['file'];
    //file properties
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    //file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    if(in_array($file_ext, $allowed)){
        if($file_error === 0) {
            if($file_size <= 2097152) {
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_destination = 'uploads/' . $file_name_new;
                if(move_uploaded_file($file_tmp, $file_destination)) {
                    
                 
                    //connect to database
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "library";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    
                    $name = $_SESSION['name'];

                    //insert file information into topup table
                    $sql = "UPDATE register SET register.receipt_name='$file_name', register.receipt_path='$file_destination'WHERE name='$name' AND receipt_name=''";

                    if ($conn->query($sql) === TRUE) {
                        echo '<script>alert("Successful"); window.location = "index.php";</script>';
                        exit;
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
            }
        }
    }
}
?>
