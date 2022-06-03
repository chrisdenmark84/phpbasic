<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get v Post</title>
</head>

<body>

    <form action="password.php" method="GET">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    echo $_GET['fname'];
    ?>

    <form action="password.php" method="POST">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>

    <?php
    echo $_POST['password'];
    ?>

</body>

</html>