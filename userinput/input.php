<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>

<body>

    <form action="input.php" method="get">
        Name: <input type="text" name="fname"><br>
        Age: <input type="number" name="age"><br>
        <input type="submit">
    </form>
    <br>

    Your name is <?php echo $_GET["fname"] ?><br>
    Your age is <?php echo $_GET["age"] ?><br>

</body>

</html>