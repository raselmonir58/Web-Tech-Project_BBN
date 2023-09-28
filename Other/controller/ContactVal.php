<?php
session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $feedback = $_POST['feedback'];


    if($name == "" || $email == "" || $subject == "" || $feedback == "")
    {
        header('location:../view/ Contact.php?err=null');
    }
    else
    {
    	$con = mysqli_connect('localhost', 'root', '', 'blood_bank');
        $sql = "insert into feedback values('', '{$name}','{$email}','{$subject}','{$feedback}')";
        $status = mysqli_query($con, $sql);
        
        if($status)
        {
            header('location:../view/ ContactP2.php');
        }
        else{
           		echo "DB error";
    		}
    }


?>