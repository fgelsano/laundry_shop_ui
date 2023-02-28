<?php
    include('config/dbConnection.php');


    $u=$_POST['username'];
    $p=$_POST['password'];

    $selectUser = "select password from users where username = '$u'";
    $findPass = mysqli_query($conn, $selectUser);
    $hashedPass = mysqli_fetch_assoc($findPass);

    $verifyPass = password_verify($p, $hashedPass);
    $query = "select * from users where username = '$u' and password ='$p'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    $id = mysqli_fetch_assoc($result);
    $userId = $id['id'];

    if($count >1){
        header("location:login-form.php?show_alert=ugly");
    }else if($count >0){
        header("locaion:admin/dashboard.php?id=$userId");
    }else{
        header("location:login-form.php?show_alert = invalid");
    }

    ?>