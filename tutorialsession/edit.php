<?php
include('connect.php');
$id=$method_GET['record-id']; // 44

$ask ="Select * from `crudoperation` where id=$id";

$result = mysqli_query($con,$ask);
$db_conn = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result)> 0){
}
$n   = $usa_ka_record['Name'];
$a    = $usa_ka_record['Address'];
$e     = $usa_ka_record['Email'];

?>
<?php include('footer.php'); ?>

