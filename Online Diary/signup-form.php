<?php include('includes/header.php')?>

<!-- ?php include('config/dbConnection.php');?> -->

<div class="container">
    <div class="clo-4 offset-4">
        <div class="card">
            <h5 class="card-header">Sign up </h5>
            <form action="signup.php" method="post">
                <div class="card-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="fullname">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" id="username" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="sign up" class="btn btn-primay btn-sm">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php')?>