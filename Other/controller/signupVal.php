<?php
session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $mobile = $_POST['num'];
    $address = $_POST['add'];
    $blood = $_POST['blood'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $role = $_POST['role'];


    if($name == "" || $email == "" || $username == "" || $mobile == "" || $address == "" || $blood == "" ||  $password == "" || $confirmPassword == "" || $gender == "" || $dob == "" || $role == "")
    {
        header('location: ../view/Signup.php?err=null');
    }
     else if($password != $confirmPassword)
    {
    	header('location: ../view/Signup.php?err=notMatch');
    }
    else
    {
    	$con = mysqli_connect('localhost', 'root', '', 'blood_bank');
        $sql = "insert into signup values('', '{$name}','{$email}','{$username}','{$mobile}','{$address}','{$blood}', '{$password}','{$confirmPassword}','{$gender}','{$dob}','{$role}')";
        $status = mysqli_query($con, $sql);
        
        if($status)
        {
            header('location: ../view/Signupsuccess.php');
        }
        else{
           		echo "DB error";
    		}
    }


?>