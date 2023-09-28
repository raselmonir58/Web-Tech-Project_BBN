<?php 
	include('../controller/adminloginaction.php');
    include('../controller/header.php');
    include('../../authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Receiver</title>
	
</head>
<body >
				
	<br><br>
	<fieldset>
	<legend><h1 class='admin'>Welcome to AdminInfo Management</h1></legend>
	<br><br>

	 <a class="a" href="adminchangepassword.php">Change Password</a>
	 <br><br>
		<a class="a" href="admineditprofile.php">Update  Profile</a><br><br>
		<a class="a" href="../controller/adminviewprofileaction.php">View  Profile</a><br><br>
		<a class="a" href="../controller/alladminviewaction.php">View All Admin</a><br><br>
		<a class="a" href="../controller/viewfeedbackaction.php">Feedback</a><br><br>
		<a class="a" href="../controller/adminlogout.php">Logout</a>
            




	<br><br>
</fieldset>
	<br><br>
	
	


</body>
</html>























<?php include('../controller/footer.php')  ?>