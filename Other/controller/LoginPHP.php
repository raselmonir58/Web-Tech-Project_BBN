<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $con = mysqli_connect('localhost', 'root', '', 'blood_bank');
    $sql = "select * from signup where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    
    if($username == "" || $password == "")
        {
            header('location: ../view/Login.php?err=null');
        }

    elseif(mysqli_num_rows($result)>0){
        $user = mysqli_fetch_assoc($result);
         $_SESSION['username'] = $username;
        if ($user['role']=='donor') {
            $_SESSION['auth'] = "donor";
            header('location: ../view/Donor.php?Id=' .$username);
        }
        elseif ($user['role']=='reciever') {
            $_SESSION['auth'] = "reciever";
            header('location: ../view/Reciever.php');
        }
        elseif ($user['role']=='hospital') {
            $_SESSION['auth'] = "hospital";
            header('location: ../view/Hospital.php');
        }
        elseif ($user['role']=='admin') {
            $_SESSION['auth'] = "admin";
            header('location: ../../Admin/view/adminhome.php');
        }
        else
        {
            header('location: ../view/Login.php?err=error');
        }
    }
    else{
        header('location: ../view/Login.php?err=notMatch');
    }


?>
