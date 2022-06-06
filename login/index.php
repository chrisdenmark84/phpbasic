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




    ?>
    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <p>Don't have an account? Sign up here.</p>
                <form action="includes/signup.inc.php" method="POST">
                    <input type="text" name="uid">
                    <input type="password" name="pwd">
                    <input type="password" name="pwdrepeat">
                    <input type="email" name="email">
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            <hr>
            <div class="index-login-login">
                <h4>Login</h4>
                <p>Have an account? Login here.</p>
                <form action="includes/login.inc.php" method="POST">
                    <input type="text" name="uid">
                    <input type="password" name="pwd">
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>