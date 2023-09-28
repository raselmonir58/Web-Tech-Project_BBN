<?php 
	include('../controller/adddonoraction.php');
    include('../controller/header.php');
    include('../../authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add donor</title>

</head>

<body>
	<div>
		<form method="post" action="../controller/adddonoraction.php">
			<fieldset>
			<legend><h1 class="donor">Add donor</h1></legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" ></td>
				</tr>	
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" ></td>
				</tr>	
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address"></td>
				</tr>
				<tr>
					<td>Blood Group:</td>
					<td><select name="bloodgroup">
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
				<tr>
					<td>Mobile no:</td>
					<td><input type="text" name="mobile"></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gender">
					Female</td>
					<td><input type="radio" name="gender">
					Male</td>
				</tr>
                <tr>	
					<td>Last donation:</td>
					<td><input type="text" name="lastdonation"></td>
				</tr>	
				<tr>
					<td>Date of Birth:</td>
					<td><input type="Date" name="dateofbirth"></td>
				</tr>
			</table>
				<input type="submit" name="submit" value="Add">
				<br><br>
				<a class="a" href="adminhome.php">Go to dashboard </a><br><br>
                <a class="a" href="donor.php">Go Back </a>
			
            <br>
		</form>
	</fieldset>
	</div>
	<?php 
		if(isset($_SESSION['adddonor'])){
			echo $_SESSION['adddonor'] ;
			$_SESSION['adddonor']=' ';

		}
	?>
	<br><br>
</body>
</html>
<?php include('../controller/footer.php')  ?>