<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<main>

   <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <a class="navbar-brand" href="#">MY RECIPES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Link</a>
      <li><a href="Logout"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="container">
    <table class="table">
       <thead>
       <tr>
           <th scope="col">#</th>
           <th scope="col">Name of Recipe</th>
         
      </tr>
      </thead>
      <tbody>
      <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
     </tr>
     <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
     </tr>
     <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
     </tr>
    </tbody>
   </table>
  </div>
<div class="mt-4 p-5 bg-success text-white rounded">
  <h1>WELCOME TRINITY</h1>
</div>
  
</main>
</body>
</html>

<!-- // include('header.php');
// include('connect.php');

// if (isset($_GET['show-welcome'])){
//      $id = $_GET['show_welcome'];
// }else if(isset($_GET['id'])){
//   $id= $_GET['id'];
// }else{
//     $id = null;
    
//   }

// if($id = null){

//      $sql = "Select* from users where id='$id'";
//      $result= mysqli_query($conn,$sql);

//    if(mysqli_num_rows($result)> 0 ){
//     $user = mysqli_fetch_assoc($result);
//     $bgcolor = 'primary';

//   } else {
//     $user ['full_name']='No found';
//     $bgcolor = 'danger';
//   }

// } else {
//   $user ['full_name']='No found';
//   $bgcolor = 'danger';
// }


// 
<!-- //  <nav class="navbar navbar-expand-lg navbar-light bg-light">
//   <a class="navbar-brand" href="#">Home</a>
//   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
//     <span class="navbar-toggler-icon"></span>
//   </button>
//   <div class="collapse navbar-collapse" id="navbarNav">
//     <ul class="navbar-nav">
//       <li class="nav-item active">
//         <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
//       </li>
//       <li class="nav-item">
//         <a class="nav-link" href="#">Ingredients</a>
//       </li>
//       <li class="nav-item">
//         <a class="nav-link" href="#">Pricing</a>
//       </li>
//       <li class="nav-item">
//         <a class="nav-link disabled" href="#">Disabled</a>
//       </li>
//     </ul>
//   </div>
// </nav>
// <div class="mt-5 p-6 bg-cyan text-white rounded">
//   <h1>Welcome Here</h1>
//   <p>Lorem ipsum...</p>
// </div> -->

<!-- <div class="form">
<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
  <label for="lname">Contact No:</label><br>
  <input type="text" id="lname" name="lname">
  <label for="lname">Email:</label><br>
  <input type="text" id="lname" name="lname">
  
  <form>
</div> --> 
