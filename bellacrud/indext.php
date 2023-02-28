<?php 
  include ('config/dbconnection.php');
  
  if(isset($_GET['show_alert'])){
    $alert = $_GET['show_alert'];
    if($alert == 'update-successful'){
      echo '
      <script>
        var element = document.getElementById("alert-bar");
        console.log(element);
        element.classList.remove("d-none");
      </script>
      ';
    }
  }
  
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <style>
        .form-control{
            margin:8px 0;
        }
        .col-10{
            margin: 0 auto;
        }
    </style>

    <title>My Crud</title>
</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class=text-light>Add user</a>
</button>
<div class="">
<div class="col-10">
<table class="table shadow-lg">
  <div class="alert alert-success d-none" id="alert-bar">Record Updated</div>
  <thead>
      <th scope="col">S#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
  </thead >
  <tbody>
        <tr>
  <?php

    $sql="Select * from `crudoperation`";
    $result=mysqli_query($con,$sql);
 
    $row=mysqli_fetch_assoc($result);
    
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id       = $row['id'];       // 41
        $pangan   = $row['Name'];     // Annabella Flores
        $taga_asa = $row['Address'];  // Central Hilongos
        $eyot     = $row['Gender'];   // Female
        $sobre    = $row['Email'];    // bella@yahoo.com

        echo '
          <tr>
            <td>'.$id.'</td>
            <td>'.$pangan.'</td>
            <td>'.$taga_asa.'</td>
            <td>'.$eyot.'</td>
            <td>'.$sobre.'</td>
            <td><a href="edit.php?record-id='.$id.'">Edit</a></td>
          </tr>
        ';
      }
    } else {
      echo '<div style="background-color: red; color: white">No record to display</div>';
    }
//   if($result){
//     while($row=mysqli_fetch_assoc($result)){
//      $id=$row['id'];
//       $Name=$row['Name'];
//       $Address=$row['Address'];
//       $Gender=$row['Gender'];
//       $Email=$row['Email'];
//       echo '
//       <tr>
//       <th scope="row">'.$id.'</th>
//       <td>'.$Name.'</td>
//       <td>'.$Address.'</td>
//       <td>'.$Gender.'</td>
//       <td>'.$Email.'</td>
//       <td>
//       <button class="btn btn-primary me-3"><a href="update.php?updateid='.$id.'" class="text-light">Edit</a></ button>
//       <button class="btn btn-danger ms-2"><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></ button>  

//     </td>

//     </tr>';

//   }
// }
?>
    </tr>
      
     
      <!-- <tr>
       <th scope="row">3. Mary Jane Arcilla</th>
       <td>Brgy. Marangug Hilongos, Leyte</td>
       <td>Female</td>
       <td>jane@gmail.com</td>

     </tr>
     <tr>
       <th scope="row">4. Cristaian Mabia</th>
       <td>Brgy. Eastern Hilongos, Leyte</td>
       <td>Male</td>
       <td>tianex@gmail.com</td>

     </tr> 
  </tbody>-->
   </table>
  </div>
  </div>
  </div>
</body>
</html>