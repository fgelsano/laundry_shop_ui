<?php
include ('header.php');?>
include ('..includes/config/dbconnection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `crudoperation` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      echo "Deleted successfully";
     
    }else{
        die(mysqli_error($con));
    }

}



<?php include('footer.php')?>


