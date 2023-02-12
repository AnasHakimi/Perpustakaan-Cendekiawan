<!DOCTYPE html>
<html>
    <head>
        <title>Topup</title>
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
            </div>
            <div class="nav2">
            <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Student/Staff ID</th>
        <th class="text-center">User</th>
        <th class="text-center">Amount</th>
        <th class="text-center">Receipt</th>
        <th class="text-center">Status</th>
        <th class="text-center">Date</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
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
      
      $sql="SELECT * from topup";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?></td>
      <td><?=$row["student_id"]?></td>      
      <td><?=$row["user"]?></td> 
      <td><?=$row["amount"]?></td>   
      <td><?=$row["receipt_path"]?></td>
      <td><?=$row["status"]?></td>
      <td><?=$row["topup_date"]?></td>
      <td>
          <form action="update-status.php" method="post">
               <select name="status" id="status">
               <option value="">select</option>
               <option value="complete">complete</option>
               <input type="hidden" name="id" value="<?= $row["id"] ?>">
               </select>
          <input type="submit" value="Update">
          </form>
     </td>     
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>


            </div>
            <div class="footer">
                <p>&copy 2023 Perpustakaan Cendekiawan. All Rights Reserved</p>
                </div>
</div>
     
    </body>
 
</html>