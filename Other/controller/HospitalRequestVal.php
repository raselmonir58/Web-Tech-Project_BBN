<?php
session_start();
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $problem = $_POST['problem'];
    $hospital = $_POST['hospital'];
    $address = $_POST['add'];
    $mobile = $_POST['num'];
    $date = $_POST['date'];
    $time = $_POST['time'];


    if($name == "" || $age == "" || $gender == "" || $problem == "" || $hospital == "" || $address == "" ||  $mobile == "" || $date == "" || $time == "")
    {
        header('location: ../view/HospitalRequest.php?err=null');
    }
    else
    {
    	$con = mysqli_connect('localhost', 'root', '', 'blood_bank');
        $sql = "insert into requestdonor values('', '{$name}','{$age}','{$gender}','{$problem}','{$hospital}','{$address}','{$mobile}','{$date}','{$time}')";
        $status = mysqli_query($con, $sql);
        
        if($status)
        {
            header('location: ../view/HospitalRequestSuccess.php');
        }
        else{
           		echo "DB error";
    		}
    }


?>