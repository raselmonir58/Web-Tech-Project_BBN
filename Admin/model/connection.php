<?php 
	function connect() {
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "blood_bank";
		$conn = mysqli_connect($hostname, $username, $password, $dbname);
		return $conn;
	}
?>