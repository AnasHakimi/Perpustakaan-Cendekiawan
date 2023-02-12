<?php
session_start();
$name = $_SESSION['name'];
$_SESSION['name'] = $name;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" type="x-icon" href="images/logo2.png">
        <link href="css/payment.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    </head>
    <body>
        <div class="main">
            <div class="topnav">
                <div class="logo">
                <a href="index.php"><img src="images/logouitm.png" alt="logo"></a>
                </div>
                <div class="logoright">
                    <div><img src="images/logo1.png" alt="logo" style="margin-right: 30px; width: 110px; height: 70px;"></div>
                    <div><img src="images/logo2.png" alt="logo" style="margin-right: 10px; width: 80px; height: 70px;"></div>
                </div>
            </div>
            <div class="nav2">
            <form action="upload.php" method="post" enctype="multipart/form-data">

            <label for="file">Account Name: Perpustakaan Cendekiawan</label>
            <br>
            <label for="file">Bank: Bank Islam</label>
            <br>
            <label for="file">Account Number: </label>
            <br>
            <br>
            
             <label for="file">Select a receipt to upload:</label>
             <input type="file" name="file" id="file">
             <input type="submit" value="Upload" name="submit">
           </form>


            </div>
            <div class="footer">
                <p>&copy 2023 Perpustakaan Cendekiawan. All Rights Reserved</p>
                </div>
</div>
     
    </body>
 
</html>