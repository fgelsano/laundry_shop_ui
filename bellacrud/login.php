
<?php
include('connect.php');

if (isset($_POST['username'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from users where usersname='".$username."'AND password='".$password."limit 1'";
    
    $result=mysqli_query($con,$sql);
}
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in ";
        exit();
    }
    else{
    header("location:admin/dashboard.php?show_alert");
       
        
    }

?>


