<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="blood_bank";
	$conn = new mysqli($servername, $username, $password,$dbname);
		return $conn;
	
?>