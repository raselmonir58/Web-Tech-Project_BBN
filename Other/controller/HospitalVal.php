<?php
session_start();
    $pname = $_POST['pname'];
    $page = $_POST['page'];
    $pgender = $_POST['pgender'];
    $pproblem = $_POST['pproblem'];
    $pblood = $_POST['pblood'];
    $dname = $_POST['dname'];
    $dgender = $_POST['dgender'];
    $dage = $_POST['dage'];
    $hospital = $_POST['hospital'];
    $address = $_POST['address'];
    $date = $_POST['date'];


    if($pname == "" || $page == "" || $pgender == "" || $pproblem == "" || $pblood == "" || $dname == "" ||  $dgender == "" || $dage == "" || $hospital == "" || $address == "" || $date == "")
    {
        header('location: ../view/Hospital.php?err=null');
    }
    else
    {
    	$con = mysqli_connect('localhost', 'root', '', 'blood_bank');
        $sql = "insert into hospital values('', '{$pname}','{$page}','{$pgender}','{$pproblem}','{$pblood}','{$dname}','{$dgender}','{$dage}','{$hospital}','{$address}','{$date}')";
        $status = mysqli_query($con, $sql);
        
        if($status)
        {
            header('location: ../view/HospitalP2.php');
        }
        else{
           		echo "DB error";
    		}
    }


?>