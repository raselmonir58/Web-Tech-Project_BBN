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
    $donorusername = $_POST['donorusername'];



    if($name == "" || $age == "" || $gender == "" || $problem == "" || $hospital == "" || $address == "" ||  $mobile == "" || $date == "" || $time == "" || $donorusername == "")
    {
        header('location: ../view/RecieverRequest.php?err=null');
    }
    else
    {
        $con = mysqli_connect('localhost', 'root', '', 'blood_bank');
        /*$userid = "select * from donor where username = {$username}";
        $result = mysqli_query($con, $userid);*/
        $sql = "insert into requestdonor values('', '{$name}','{$age}','{$gender}','{$problem}','{$hospital}','{$address}','{$mobile}','{$date}','{$time}','{$donorusername}')";
        $status = mysqli_query($con, $sql);
        
        if($status)
        {
            header('location: ../view/RequestSuccess.php');
        }
        else{
                echo "DB error";
            }
    }


?>