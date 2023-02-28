<?php
include('dbconnection.php');
$u = $_POST['username'];
$p = $_POST['password'];
$f = $_POTS['fullname'];

$sql = "INSERT INTO users (username, password, full_name) VALUES ('$u', '$p','$f')";

if(mysqli_query($conn.$sql)== TRUE){
    $id = $conn-> insert_id;
    header("location:dashboard.php?show_welcome=$id");

}else{
    header("location:signup-form.php?show_alert");

}
$conn_close();





?>