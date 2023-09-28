<?php 
	include('../Controller/adminchangepasswordaction.php');
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
<body >
<br><br>
				

<form method="post" action="../controller/allhospitalaction.php">
        <h1 align='center' class="hospital">All hospital </h1>
		<div align="center">
			

			<?php 

				$x = $_SESSION['info'];

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

				for($i=0; $i<sizeof($x);$i++)
				{

					echo "<tr>";
					echo "<td>" . $x[$i]['pname'] . "</td>";
					echo "<td>" . $x[$i]['page'] . "</td>";
					echo "<td>" . $x[$i]['pgender'] . "</td>";
					echo "<td>" . $x[$i]['pproblem'] . "</td>";
					echo "<td>" . $x[$i]['pblood'] . "</td>";
					echo "<td>" . $x[$i]['dname'] . "</td>";
					echo "<td>" . $x[$i]['dgender'] . "</td>";
					echo "<td>" . $x[$i]['dage'] . "</td>";
					echo "<td>" . $x[$i]['hospital'] . "</td>";
					echo "<td>" . $x[$i]['address'] . "</td>";
					echo "<td>" . $x[$i]['date'] . "</td>";
				}


			echo "</table>";

			


			
			?>
			<br><br>

			<a class="a" href="searchhospital.php">Search hospital</a>
			<br><br>
			<a class="a" href="hospital.php">Go Back</a>
			<br>

		</div>
			<br><br>


</body>
</html>
<?php

require('../controller/footer.php');

?>

