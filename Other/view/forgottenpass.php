<!DOCTYPE html>
<html>
    <head>
        <title>BBN | Forgotten Password</title>
         <link rel="stylesheet" type="text/css" href="CSS/style.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head><br>


    <body style="background-color: ghostwhite;">
        <form method="post">
        <header>
            <div class="container">
                <div id="branding">
                   <h1>Bangladesh Blood Network (BBN)</h1>
                </div>
                <nav>
                    <ul>
                      <li><a href="Home.php"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                      <li><a href="Login.php"><i class="fa-sharp fa-solid fa-rotate-left"></i> Go Back</a></li> 
                    </ul>
                </nav>
            </div>
        </header>

        <div class="fpass" align="center">
            <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="Enter your Username"></td>
            </tr>
            <tr>
                <td>Old Password:</td>
                <td><input type="text" name="oldpass" placeholder="Old Password"></td>
            </tr>
            <tr>
                <td>New Password:</td>
                <td><input type="Password" name="newpass" placeholder="New Password"></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="Password" name="confirmpass" placeholder="Confirm Password"></td>
            </tr>
            <table> <br>
                <button>Change Password</button>  
        </div>


    <footer class="footer">
        <p align="center">"মুমূর্ষু রোগীর প্রাণের টানে, এগিয়ে আসুন রক্তদানে"</p>
    </footer>

    </form>
</body>
</html>