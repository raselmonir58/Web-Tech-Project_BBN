<!DOCTYPE html>
<html>
    <head>
        <title>BBN | Contact</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head><br>
    
    <body style="background-color: ghostwhite;">
        <form action="../controller/ContactVal.php" method="post" >
        <header>
            <div class="container">
                <div id="branding">
                   <h1>Bangladesh Blood Network (BBN)</h1>
                </div>
                <nav>
                    <ul>
                        <li class="current"><a href="Contact.php"><i class="fa-solid fa-address-card"></i> Contact</a></li>
                      <li><a href="Home.php"><i class="fa-sharp fa-solid fa-rotate-left"></i>  Go Back</a></li>    
                    </ul>
                </nav>
            </div>
        </header> <br><br>

        <div class="Contact">
        <div class="info">
            <h3><i class="fa-solid fa-location-dot"></i> Office Address</h3>
            <p>House No: 295/ka/2 <br> Road No: 05 <br> Kuratoli Bazar <br> Kuril BishwoRoad <br> Khilkhet, Dhaka. </p>
        <br>
             <h3><i class="fa-sharp fa-solid fa-phone-volume"></i> Office Contact</h3>
             <p>Mobile: 01780596565 <br> What's App: 01518646727 <br>Email: bbn2018@gmail.com </p>
        <br>
            <h3><i class="fa-sharp fa-solid fa-circle-info"></i> For Others Information</h3>
            <p><b>Rasel Monir</b> <br> Mobile: 01868369979 <br> Email: raselmonir58@gmail.com</p>
        </div>

        <div class="feedback">
            <h1>Give us your feedback</h1>

            <?php
        if(isset($_GET['err']))
            {
                if($_GET['err'] == 'null')
                    {
                        echo ">> Must be filled all info...";
                    }
            }
    ?>

    <br>

                <label>Your Name:</label><br> 
                <input type="text" name="name"><br>            
                <label>Your Email:</label><br> 
                <input type="email" name="email"><br> 
                <label> subject:</label><br> 
                <input type="text" name="subject"><br> 
                <label>Give your Feedback:</label><br> 
                <input type="text" name="feedback"><br><br>

               <button>Submit</button> 
        </div>

    </div>


 </form>
</body>
</html>
  
  <br><br><br>
  
    <footer class="footer">
        <p align="center">"মুমূর্ষু রোগীর প্রাণের টানে, এগিয়ে আসুন রক্তদানে"</p>
    </footer>

    </body>
</html>
