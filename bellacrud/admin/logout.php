

  if(isset($_GET['log']) && ($_GET['log']=='out')){
    session_destroy();
    header('location:index.php');

  }
