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
	<title>View Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<br><br>


		
			<h1 align="center" class='admin' > Admin View Profile </h1>
			<div align="center">

			<?php 

				$x = $_SESSION['info'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Firstname</th>";
				echo "<th>LastName</th>";
				echo "<th>Gender</th>";
				echo "<th>Date of Birth</th>";
				echo "<th>Blood Group</th>";
				echo "<th>Address</th>";
				echo "<th>Email</th>";
				echo "<th>Phone No</th>";
				echo "<th>Qualification</th>";
				echo "<th>Work Experience</th>";
				
				echo "</tr>";

				echo "<tr>";
				echo "<td>" . $x[0]['firstname'] . "</td>";
				echo "<td>" . $x[0]['lastname'] . "</td>";
				echo "<td>" . $x[0]['gender'] . "</td>";
				echo "<td>" . $x[0]['dob'] . "</td>";
				echo "<td>" . $x[0]['bg'] . "</td>";
				echo "<td>" . $x[0]['address'] . "</td>";
				echo "<td>" . $x[0]['email'] . "</td>";
				echo "<td>" . $x[0]['phone'] . "</td>";
				echo "<td>" . $x[0]['qua'] . "</td>";
				
				echo "<td>" . $x[0]['work'] . "</td>";
				echo "</tr>";
			


			echo "</table>";

			echo "<br><br>";


			
			?>

		

			<br><br>
			
			<a class="a" href="admineditprofile.php">Edit/Update Profile</a><br><br>
			<a class="a" href="adminportal.php">Back</a>
			<br>

		</div>
		<br><br>
</fieldset>


</body>
</html>

<?php 
	include('../controller/footer.php');
?>