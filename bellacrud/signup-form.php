<?php include('includes/header.php')?>

        <div class="container">
            <form action="signup.php" method="post">
            <label for="fullname"><b>fullname</b></label>
            <input type="text"name="fullname" required>

            <label for="username"><b>username</b></label>
            <input type="text"name="username" required>

            <label for="passsword"><b>password</b></label>
            <input type="password"name="password" required>

            <button type="submit">signup</button>
        </form>
    </div>
<?php include('includes/footer.php')?>