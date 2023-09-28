<?php 
	include('../controller/adminloginaction.php');
    include('../controller/header.php');
    include('../../authentication.php');
?>





<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="body">
	<br><br>
	<table width=100% class="table">

	
		<tr >
			<br><br><br><br><br>
		</tr>
		<tr>

			<td class="td" align=center><a href="donor.php"><img src="css/donor.jpg" alt="logo" width="150" height="130"></a></td>
			<td class="td" align=center><a href="receiver.php"> <img src="css/receiver.jpg" alt="logo" width="130" height="100"> </a></td>
			<td class="td" align=center><a href="hospital.php"> <img src="css/hospital1.png" alt="logo" width="110" height="120"> </a></td>
			<td class="td" align=center><a href="adminportal.php"> <img src="css/admin.jpg" alt="logo" width="120" height="140"> </a></td>
		</tr>
		<tr>
			<td class="td"><h4 class="home" align="center">Donor</h4></td>
			<td class="td"><h4 class="home" align="center">Receiver</h4></td>
			<td class="td"><h4 class="home" align="center">Hospital</h4></td>
			<td class="td"><h4 class="home" align="center">Admin Portal</h4></td>
		</tr>
	</table>
	<br><br>
	<br><br>

</body>
</html>

<?php include('../controller/footer.php')  ?>