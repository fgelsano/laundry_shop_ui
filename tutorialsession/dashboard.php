 <?php
 include('header.php');?>

<?php
include('connect.php');

if(isset($_GET['show_welcome'])){
  $id = $_GET['show_'];
  $ask = "Select* from users where id='$id'";
  $result = mysqli_qeury($conn,$ask);
  if (mysqli_num_rows($result)> 0){
  }

  }
  ?>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Recipe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
</ul>
  </div>
  <div class="mt-4 p-5 bg-primary text-white rounded">
  <h1>"HELLO WORD"</h1>
  <p>Easy recipe for everyone</p>
</div>
</nav>

<div class="form">
<form>
  <label for="fname">Title:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Ingredients:</label><br>
  <input type="text" id="lname" name="lname">
  <label for="fname">Procedure:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">:</label><br>
  
  <form>
</div>
<?php('footer.php')?>
