<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
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
                <div class="dropdown">
                  <button class="dropbtn"><i class="fa fa-bars"></i></button>
              <div class="dropdown-content">
                <a href="logout.php">Log Out</a>
                  </div>
            </div>
            </div>

            <div class="container">
                <div class="cont1"><h2>ADMIN DASHBOARD</h2></div>
            <div class="cont2"> 
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;"><a href="topup.php">Topup Account</a></h4>
                    <h5 style="color:white;">
                    <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "library";
            
                     $link = mysqli_connect($servername, $username, $password, $dbname);
                     if (!$link) {
                       die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
                       }
                        $query = "SELECT COUNT(*) FROM topup WHERE status = 'pending'";
                        $result = mysqli_query($link, $query);
                        $row = mysqli_fetch_array($result);
                        $pending_count = $row[0];
                                   
                        echo "$pending_count";
                        mysqli_close($link);
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-users mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;"><a href="register.php">Register Account</a></h4>
                    <h5 style="color:white;">
                    <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "library";
            
                     $link = mysqli_connect($servername, $username, $password, $dbname);
                     if (!$link) {
                       die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
                       }
                        $query = "SELECT COUNT(*) FROM register WHERE status = 'pending'";
                        $result = mysqli_query($link, $query);
                        $row = mysqli_fetch_array($result);
                        $pending_count = $row[0];
                                   
                        echo "$pending_count";
                        mysqli_close($link);
                    ?></h5>
                </div>
            </div>
         </div>
        </div>



            <div class="footer">
                <p>&copy 2023 Perpustakaan Cendekiawan. All Rights Reserved</p>
                </div>
</div>
     
    </body>
 
</html>