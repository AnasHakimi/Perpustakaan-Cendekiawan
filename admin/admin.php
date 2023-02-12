<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
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
            
            <div class="container">
            <form action="admin_login.php" method="post">
              <label for="username">Staff Id:</label>
              <input type="text" id="staff" name="staff_id" required>
                <br>
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required>
                <br>
              <input type="submit" value="Login">
            </form>

            </div>
            <div class="footer">
                <p>&copy 2023 Perpustakaan Cendekiawan. All Rights Reserved</p>
                </div>
</div>
     
    </body>
 
</html>