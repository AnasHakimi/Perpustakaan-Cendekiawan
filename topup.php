<!DOCTYPE html>
<html>
    <head>
        <title>Topup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" type="x-icon" href="images/logo2.png">
        <link href="css/topup.css" rel="stylesheet" type="text/css"/>
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
                <a href="index.php">Home</a>
                <a href="service.php">Our Service</a>
                <a href="walk.php">Walk In</a>
                  </div>
            </div>
            </div>
            <div class="nav2">
            <form action="topupform.php" method="post" enctype="multipart/form-data">
               <label for="name">Full Name:</label>
               <input type="text" id="name" name="name" required>
               <br>
               <label for="id">Student/Staff ID:</label>
               <input type="text" id="id" name="student_id" required>
               <br>
               <label for="userType">Type of User:</label>
                 <select id="user" name="user" required>
               <option value="">Select one</option>
               <option value="student">Student</option>
              <option value="staff">Staff</option>
              </select>
              <label for="amount">Amount (Minimum RM5):</label>
              <input type="number" id="amount" name="amount" min="5" placeholder="Minimum RM5" required>
                <br>
                <br><br>
              <input type="submit" value="Submit">
            </form>


            </div>
            <div class="footer">
                <p>&copy 2023 Perpustakaan Cendekiawan. All Rights Reserved</p>
                </div>
</div>
     
    </body>
 
</html>