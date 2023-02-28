<?php
include('dbconnection.php');
$id=$_GET['record-id']; // 44

$pangutan ="Select * from `crudoperation` where id=$id";

$tubag_ni_db = mysqli_query($con,$pangutana);
$usa_ka_record = mysqli_fetch_assoc($tubag_ni_db);

$pangalan   = $usa_ka_record['Name'];
$asa_man    = $usa_ka_record['Address'];
$eyot       = $usa_ka_record['Gender'];
$sobre      = $usa_ka_record['Email'];

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
      <form class="bg-success shadow-lg p-4" method="post" action="update.php">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="pangalan" value="<?php echo $pangalan ?>">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="taga_asa" value="<?php echo $asa_man ?>">
        </div>
        <div class="form-group">
          <label>Gender</label>
          <input type="text" class="form-control" name="eyot" value="<?php echo $eyot ?>">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="suwatanan" value="<?php echo $sobre ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-group mt-3">
          <input type="submit" class="form-control btn btn-primary" name="epalawan">
        </div>
      </form>
    </div>
  </body>
</html>