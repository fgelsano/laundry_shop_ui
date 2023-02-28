<?php include('header.php')?>

        <div class="container">
            <form action="login.php" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text"name="username" required>

            <label for="passsword"><b>Password</b></label>
            <input type="password"name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
<?php
include('footer.php')?>

