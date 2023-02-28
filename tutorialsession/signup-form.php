<?php include('header.php')?>


        <div class="container">
            <form action="login.php" method="post">
            <label for="fullname"><b>fullname</b></label>
            <input type="text"name="fullname" required>

            <label for="username"><b>Username</b></label>
            <input type="text"name="username" required>

            <label for="passsword"><b>Password</b></label>
            <input type="password"name="password" required>

            <button type="submit">save</button>
        </form>
    </div>
<?php
include('footer.php')?>
