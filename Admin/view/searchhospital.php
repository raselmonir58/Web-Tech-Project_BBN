<?php 
	include('../controller/searchhospitalaction.php');
	include('../controller/header.php');
	
	include('../../authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Operation</title>
	
</head>
<body >
<div >
	<form method="post" action="../controller/searchhospitalaction.php">
		<br><br>
	<fieldset >
	<legend><h1 class="hospital">Search hospital</h1></legend>

				
			Enter patient name to search
			<input type="text" name="username">
			<input type="submit" name="submit" value="Search">
			<br><br>
			<a class="a" href="hospital.php">Go Back</a>

		</fieldset>
	</form>

</div>

	<br><br>

	<?php 

	if(isset($_SESSION['flagp'])){


		if($_SESSION['flagp']){

				$x = $_SESSION['searchhospital'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Patient Name</th>";
				echo "<th>Patient Age</th>";
				echo "<th>Patient Gender</th>";
				echo "<th>Patient Problem</th>";
				echo "<th>Patient Blood</th>";
				echo "<th>Donor Name</th>";
				echo "<th>Donor Gender</th>";
				echo "<th>Donor Age</th>";
				echo "<th>Hospital</th>";
				echo "<th>Address</th>";
				echo "<th>Date</th>";
				
				
				echo "</tr>";

				echo "<tr>";
				echo "<td>" . $x[0]['pname'] . "</td>";
				echo "<td>" . $x[0]['page'] . "</td>";
				echo "<td>" . $x[0]['pgender'] . "</td>";
				echo "<td>" . $x[0]['pproblem'] . "</td>";
				echo "<td>" . $x[0]['pblood'] . "</td>";
				echo "<td>" . $x[0]['dname'] . "</td>";
				echo "<td>" . $x[0]['dgender'] . "</td>";
				echo "<td>" . $x[0]['dage'] . "</td>";
				echo "<td>" . $x[0]['hospital'] . "</td>";
				echo "<td>" . $x[0]['address'] . "</td>";
				echo "<td>" . $x[0]['date'] . "</td>";
				echo "</tr>";



			echo "</table>";

			echo "<br><br>";
			
		}

		else
		{
			echo "No data Found.";
		}
	}

	if(isset($_SESSION['errordatap'])){
		echo $_SESSION['errordatap'];
		$_SESSION['errordatap']=' ';
	}
	?>


</body>
</html>
<?php

require('../controller/footer.php');

?>
