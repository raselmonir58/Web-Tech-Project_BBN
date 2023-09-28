<?php
session_start();
include('../model/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET['name'])) {
        echo "";
    } 
    else {
        $name=$_GET['name'];
    }

$sql ="Select * from donor";
      $result = $conn->query($sql);
   
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>BBN | Reciever</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head><br>
    
    <body style="background-color: ghostwhite;">
        <header>
            <div class="container">
                <div id="branding">
                   <h1>Bangladesh Blood Network (BBN)</h1>
                </div>
                <nav>
                    <ul>
                       <li><a href="Home.php"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                       <li class="current"><a href="Reciever.php"><i class="fa-solid fa-hand-holding-heart"></i> Reciever</a></li>
                       <li><a href="Login.php"><i class="fa-solid fa-backward-fast"></i> Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <h3 align="center">Welcome to Bangladesh Blood Network (BBN)</h3>

        
     <table border="1" align="center">
        <tr>
         <th>Serial No:</th>
         <th>Name</th>
         <th>Username</th>
         <th>Address</th>
         <th>Blood Group</th>
         <th>Gender</th>
         <th>Date Of Birth</th>
         <th>Last Donation</th>
         <th>Donor Request</th>
     </tr>
     <?php while ($row=$result->fetch_assoc()) { ?>
     <tr>
         <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["name"]; ?></td>
         <td><?php echo $row["username"]; ?></td>
         <td><?php echo $row["address"]; ?></td>
         <td><?php echo $row["bloodgroup"]; ?></td>
         <td><?php echo $row["gender"]; ?></td>
         <td><?php echo $row["dateofbirth"]; ?></td>
         <td><?php echo $row["lastdonation"]; ?></td>
         <td><a href="RecieverRequest.php"><button name="request">Request to Donor</button></a></td>

     </tr>
 <?php } ?>

     </table>       
    
</body>
</html>
  
  <br><br><br>
  
    <footer class="footer">
        <p align="center">"মুমূর্ষু রোগীর প্রাণের টানে, এগিয়ে আসুন রক্তদানে"</p>
    </footer>

    </body>
</html>
