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
	<link rel="stylesheet" type="text/css" href="css/background.css">
</head>
	
	
</head>
<body class="b">
<br><br>

        <h1 align='center' class="donor">All Donor </h1>
		<div align="center">
			
			<form method="post" action="../controller/deletedonoraction.php">
			<?php 

				$x = $_SESSION['feedback'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Name</th>";
				echo "<th>Email</th>";
				echo "<th>Subject</th>";
				echo "<th>FeedBack</th>";				
				
				echo "</tr>";

				for($i=0; $i<sizeof($x);$i++)
				{

					echo "<tr>";
					echo "<td>" . $x[$i]['id'] . "</td>";
					echo "<td>" . $x[$i]['name'] . "</td>";
					echo "<td>" . $x[$i]['email'] . "</td>";
					echo "<td>" . $x[$i]['subject'] . "</td>";
					echo "<td>" . $x[$i]['feedback'] . "</td>";					
					
					echo "</tr>";
				}


			echo "</table>";
			


			
			?>
			<br><br>
			<a class="a" href="adminportal.php">Go Back</a>
			<br><br>
			<br>
			</form>

		</div>
			<br><br>
		


</body>
</html>
<?php

require('../controller/footer.php');

?>

