<?php


include('connect.php');

if (isset($_POST['username'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from users where usersname='".$username."'AND password='".$password."limit 1'";
    
    $result=mysqli_query($con,$sql);
}
    if(mysqli_num_rows($result)==1){
        echo " You Have Signup Sucessfully ";
        exit();
    }
    else{
    header("location:admin/dashboard.php?show_alert");
       
        
    }









// include('config/dbConnection.php');

// $f = $_POST['fullname'];
// $u = $_POST['username'];
// $p = password_hash($_POST['password'],PASSWORD_DEFAULT);
// $sql = "INSERT INTO users (username, password, full_name) VALUES ('$f',' $u','$p')";

// if ($conn($sql)==TRUE){
//     $id = $conn_insert_id;
//     header("location:admin/dashboard.php?show_welcome=$id");

// }else{
//     header("location:signup-form.php?show_alert");

// }
// $conn_close();
?>
