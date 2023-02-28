<?php
include('connect.php');
$f = $_POST['fullname'];
$u = $_POST['username'];
$p = password_hash($_POST['password'],PASSWORD_DEFAULT);
$sql = "INSERT INTO users (username, password, full_name) VALUES ('$f',' $u','$p')";

if ($conn_qeury(sql)==TRUE){
    $id = $conn_insert_id;
    header("location:admin/dashboard.php?show_welcome=$id");

}else{
    header("location:signup-form.php?show_alert");

}
$conn_close();
?>
























