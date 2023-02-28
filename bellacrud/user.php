<?php
include 'connect.php';
if(isset($_POST['submit'])) {
    $Name=$_POST['name'];
    $Address=$_POST['address'];
    $Gender=$_POST['gender'];
    $Email=$_POST['email'];

    $sql="insert into `crudoperation` (name,address,gender,email)
    values('$Name','$Address','$Gender','$Email')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Data inserted successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>


 <!doctype html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Crud</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1> Employee's Record</h1>
    <div class="col-6 main-container p-5 my-5 m-auto">
    <!--Bootstrap form-->
    <form class="bg-success shadow-lg p-4" method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Gender</label>
    <input type="text" class="form-control" placeholder="Enter your gender" name="gender" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  </div>
  
    
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  </body>
</html>