<?php
include('header.php');

include('connect.php');

if (isset($_POST['username'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from users where usersname='".$username."'AND password='".$password."'limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        header('location:dashboard.php');
    }
    else{
        echo "You Have Entered Wrong Password";
        // header('location:dashboard.php');
    }
}

?>
<?php
include('footer.php');

?>
