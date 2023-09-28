<!DOCTYPE html>
<html>
    <head>
        <title>BBN | Donation Info</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head><br>
    
    <body style="background-color: ghostwhite;">
        <form action="../controller/HospitalVal.php" method="post" >
        <header>
            <div class="container">
                <div id="branding">
                   <h1>Bangladesh Blood Network (BBN)</h1>
                </div>
                <nav>
                    <ul>
                      <li><a href="Home.php"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                      <li class="current"><a href="Hospital.php"><i class="fa-solid fa-house-medical"></i> Hospital</a></li>
                      <li><a href="HospitalRequest.php"><i class="fa-solid fa-hand-holding-medical"></i> Request</a></li>
                      <li><a href="Login.php"><i class="fa-solid fa-backward-fast"></i> Logout</a></li> 
                    </ul>
                </nav>
            </div>
        </header>

        <h3 align="center">Welcome to Bangladesh Blood Network (BBN)</h3>

        <div class="hospital">
            <fieldset>
            <legend>Donation Information: (Please Submit all Information After Donation)</legend>
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
                <td><input type="text" name="pname" placeholder="Enter Patient's Name"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="page" placeholder="Enter Patient's Age"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="pgender" value="male"/>Male
                    <input type="radio" name="pgender" value="female"/>Female
                    <input type="radio" name="pgender" value="other"/>Other</td>
            </tr>
            <tr>
                <td>Problem:</td>
                <td><input type="text" name="pproblem" placeholder="Enter patient's Problem"></td>
            </tr>
            <tr>
                <td>Blood Group:</td>
                <td><select name="pblood" >
                <option value>Select your Blood Group</option>
                <option value="a+">A+</option>
                <option value="a-">A-</option>
                <option value="b+">B+</option>
                <option value="b-">B-</option>
                <option value="o+">O+</option>
                <option value="o-">O-</option>
                <option value="o+">AB+</option>
                <option value="o-">AB-</option>
                </select></td>
            </tr>
        </table>
            </fieldset>

            <fieldset>
                <legend>Donor Info:</legend>

         <table>
            <tr>
                <td>Donor Name:</td>
                <td><input type="text" name="dname" placeholder="Enter Donor's Name"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="dgender" value="male"/>Male
                    <input type="radio" name="dgender" value="female"/>Female
                    <input type="radio" name="dgender" value="other"/>Other</td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="dage" placeholder="Enter Donor's Age"></td>
            </tr>
        </table>
            </fieldset>

            <fieldset>
            <legend>Donation Info:</legend>
            <table>
                <tr>
                <td>Hospital Name:</td>
                <td><input type="text" name="hospital" placeholder="Enter Hospital's Name"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" placeholder="Enter Donation Address"></td>
            </tr>
            <tr>
                <td>Donation Date:</td>
                <td><input type="date" name="date"></td>
            </tr>
            
        </table></fieldset>
 
<br>

    <div class="center2"> 
        <input type="submit" name="submit" value="Submit Information">   
    </div>

</fieldset>
        </div>

     <footer class="footer">
        <p align="center">"মুমূর্ষু রোগীর প্রাণের টানে, এগিয়ে আসুন রক্তদানে"</p>
    </footer>

        </form>
    </body>
</html>