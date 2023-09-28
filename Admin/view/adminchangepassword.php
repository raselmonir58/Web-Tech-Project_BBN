<?php 
	include('../controller/adminchangepasswordaction.php');
	include('../controller/header.php');
	include('../../authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body  >
	<div>
		
		<form method="post" action="../controller/adminchangepasswordaction.php">
			<br><br>
			<fieldset >
				<legend><h1 class ="hospital">Change Password</h1></legend>
				
				<table>
					<tr>
						<td>User Name: </td>
						<td> <input type="text" name="username" >
						</td>
					</tr>
					<tr>
						<td>Old Password:</td>
						<td><input type="text" name="oldpass" >
						</td>
					</tr>
					<tr>
						<td>New Password:</td>
						<td><input type="text" name="newpass"></td>
					</tr>
					<tr><td><input type="submit" name="submit" value="Change Password">
					</td></tr>

					<tr><td><br><a class="a" href="adminportal.php">Back </a></td></tr>
				</table>
			</fieldset>
		</form>

	</div>

<br><br>
	<?php 

		if(isset($_SESSION['pas'])){
			echo $_SESSION['pas'] ;

			$_SESSION['pas']='';
		}

	?>

</body>
</html>
<?php

require('../controller/footer.php');

?>

