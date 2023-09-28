<!DOCTYPE HTML>
<html>
    <head>
        <title>BBN | Signup</title>
         <link rel="stylesheet" type="text/css" href="CSS/style.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
         <script src="Js/Val.js"></script>
    </head><br>

<body style="background-color: ghostwhite;">
    <form action="../controller/SignupVal.php" method="post">
    
        <header>
            <div class="container">
                <div id="branding">
                    <h1>Bangladesh Blood Network (BBN)</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="Home.php"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                        <li class="current"><a href="Signup.php"><i class="fa-solid fa-user-plus"></i> Signup</a></li>
                        <li><a href="Login.php"><i class="fa-sharp fa-solid fa-rotate-left"></i>  Go Back</a></li>  
                    </ul>
                </nav>
            </div>
        </header>

    <div class="registration">
    <fieldset>
    <legend>REGISTRATION</legend>

    <?php
        if(isset($_GET['err']))
            {
                if($_GET['err'] == 'null')
                    {
                        echo ">>>>> Must be filled all info...";
                    }

                    if($_GET['err'] == 'notMatch')
                    {
                        echo "Password and confirm password must be same";
                    }       
            }
    ?>
    
     <fieldset>
        <legend>Personal Information:</legend>

        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" placeholder="Enter your Name" ></td>
                <td id="n" ></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" placeholder="Enter your Email" ></td>
                <td id="e" ></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="Enter your username" >
                </td><td id="un" ></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="text" name="num" placeholder="Enter your Number" ></td>
                <td id="n" ></td>
            </tr>
             <tr>
                <td>Address:</td>
                <td><input type="add" name="add" placeholder="Enter your Address" ></td>
                <td id="ad" ></td>
            </tr>
            <tr>
                <td>Blood Group:</td>
                <td><select name="blood" >
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
                <td id="b" ></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="Enter password" ></td>
                <td id="p" ></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirmpassword" placeholder="Enter Confirm Password" ></td>
                <td id="cp" ></td>
            </tr>
         
        </table>

     </fieldset>
        

        <fieldset>
            <legend>Gender:</legend> 
            <input type="radio" name="gender" value="male" />Male
            <input type="radio" name="gender" value="female" />Female
            <input type="radio" name="gender" value="other" />Other
        </fieldset>
        <div id="g" ></div>

        <fieldset>
            <legend>Date of Birth:</legend>
            <input type="date" name="dob" value="" >
        </fieldset>
        <div id="d" ></div>

        <fieldset>
            <legend>Role:</legend> 
            <input type="radio" name="role" value="donor" />Donor
            <input type="radio" name="role" value="reviever" />Reciever
        </fieldset> <br>
        <div id="r" ></div>

        

        <div class="button"> 
            <input type="submit" name="signup" value="Signup">    
        </div>
     
            </fieldset>

    </div>
     
        
    <footer class="footer">
    <p align="center">"মুমূর্ষু রোগীর প্রাণের টানে, এগিয়ে আসুন রক্তদানে"</p>
    </footer>
     
     </form>
</body>
</html>

