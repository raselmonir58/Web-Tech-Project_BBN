<?php 


$_SESSION['status'] = "";


if(!isset($_SESSION['auth'])){
	$_SESSION['status'] = "Access Denied. Login to view this page.";
	header('Location: Other/view/Login.php');
	exit(0);
}

else
{
	
}
?>
