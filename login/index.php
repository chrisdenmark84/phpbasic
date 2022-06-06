<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php
    include "includes/header.inc.php";
    ?>
    <section class="index-login">
        <div class="wrapper">


            <?php
            if (!isset($_SESSION['userid'])) { ?>

                <div class="index-login-login">
                    <h4>Login</h4>
                    <p>Have an account? Login here.</p>
                    <form action="includes/login.inc.php" method="POST">
                        username: <input type="text" name="uid"><br />
                        password: <input type="password" name="pwd"><br />
                        <button type="submit" name="submit">Login</button>
                    </form>
                </div>
                <hr>
                <div class="index-login-signup">
                    <h4>SIGN UP</h4>
                    <p>Don't have an account? Sign up here.</p>
                    <form action="includes/signup.inc.php" method="POST">
                        username: <input type="text" name="uid"><br />
                        password:<input type="password" name="pwd"><br />
                        retype password: <input type="password" name="pwdrepeat"><br />
                        email: <input type="email" name="email"><br />
                        <button type="submit" name="submit">Sign Up</button>
                    </form>
                </div>

            <?php } ?>

        </div>

    </section>


</body>

</html>