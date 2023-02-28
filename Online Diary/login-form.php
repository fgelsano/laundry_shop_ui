<?php include('includes/header.php')?>

<div class="container" id="login-form">
    <h1>Please Enter Your Login Credentials</h1>

    <form action="login.php" method="post">

        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">

        <input type="submit" value="login">
    </form>

    <?php
        $alert="";

        if(isset($_GET['show_alert'])){
            $alert=$_GET['show_alert'];

            if($alert =='invalid'){
                echo '<h2 class="alert-error"><strong>Error:</strong>Invalid username/password.</h2>';
            }else if($alert == "ugly"){
                echo '<h2 class="alert-error"><strong>Error:</strong>hay nko!</h2>';
            }
        }
        ?>
</div>

<?php include('includes/footer.php')?>