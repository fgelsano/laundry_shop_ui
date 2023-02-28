<?php
    include('config/dbConnection.php');

    $u=$_POST['username'];
    $p=$_POST['password'];
    $f=$_POST['fullname'];

    $sql = "INSERT INTO users (username, password, fullname) VALUES ('$u, $p, $f')";
        if(mysqli_query($conn,$sql) ==TRUE){
            // $id = $conn,insert_id;
            header("location:admin/dashboard.php?show_welcome=$id");
        }

?>