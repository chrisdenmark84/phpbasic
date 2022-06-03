<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Paramters</title>
</head>

<body>

    <form action="url.php" method="GET">

        Name: <input type="text" name="fname">
        <input type="submit">

    </form>

    <?php

    echo $_GET['fname'];
    echo $_GET['age'];

    ?>

</body>

</html>