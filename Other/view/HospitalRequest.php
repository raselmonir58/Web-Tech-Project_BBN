<!DOCTYPE html>
<html>
    <head>
        <title>BBN | Request to Donor</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head><br>
    
    <body style="background-color: ghostwhite;">
        <form action="../controller/HospitalRequestVal.php" method="post" >
        <header>
            <div class="container">
                <div id="branding">
                   <h1>Bangladesh Blood Network (BBN)</h1>
                </div>
                <nav>
                    <ul>
                      <li><a href="Home.php"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                      <li class="current"><a href="HospitalRequest.php"><i class="fa-solid fa-hand-holding-medical"></i> Request</a></li>
                      <li><a href="Hospital.php"><i class="fa-sharp fa-solid fa-rotate-left"></i> Go Back</a></li> 
                      <li><a href="Login.php"><i class="fa-solid fa-backward-fast"></i> Logout</a></li> 
                    </ul>
                </nav>
            </div>
        </header>

        <h3 align="center">Welcome to Bangladesh Blood Network (BBN)</h3>

        <div class="hospitalRequest">
            <fieldset>
            <legend>Please provide all information to get Donor:</legend>
<?php
if(isset($_GET['err']))
            {
                if($_GET['err'] == 'null')
                    {
                        echo ">>>>>Must be filled all info...";
                    }

            }
?>

      <fieldset>
                <legend>Patient Info:</legend>

         <table>
            <tr>
                <td>Patiant Name:</td>
                <td><input type="text" name="name" placeholder="Enter patient's Name"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age" placeholder="Enter patient's Age"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male"/>Male
                    <input type="radio" name="gender" value="female"/>Female
                    <input type="radio" name="gender" value="other"/>Other</td>
            </tr>
            <tr>
                <td>Problem:</td>
                <td><input type="text" name="problem" placeholder="Enter patient's Problem"></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="text" name="num" placeholder="Patiant's Relatives"></td>
            </tr>
        </table>
            </fieldset><br>

            <fieldset>
            <legend>Donation Info:</legend>
            <table>
                <tr>
                <td>Hospital Name:</td>
                <td><input type="text" name="hospital" placeholder="Enter Hospital's Name"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="add" placeholder="Enter Donation Address"></td>
            </tr>
            <tr>
                <td>Donation Date:</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Donation Time:</td>
                <td><input type="time" name="time"></td>
            </tr>
            
        </table></fieldset>
 <br>

    <div class="center2"> 
        <input type="submit" name="submit" value="Send Request">   
    </div>

</fieldset>
        </div>

  
    <footer class="footer">
        <p align="center">"মুমূর্ষু রোগীর প্রাণের টানে, এগিয়ে আসুন রক্তদানে"</p>
    </footer>

</form>

    </body>
</html>
