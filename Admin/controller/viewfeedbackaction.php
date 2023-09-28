<?php

	session_start();

	include('../model/user.php');

	$_SESSION['feedback'] = getallfeedback();

	if(isset($_SESSION['feedback'])){
		header("Location: ../view/feedback.php");
	}














?>