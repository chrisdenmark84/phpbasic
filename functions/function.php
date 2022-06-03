<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>

    <form action="function.php" method="POST">
        <input type="text" name="fname">
        <input type="number" name="age">
        <input type="submit">
    </form>

    <?php

    function sayHi($name, $age)
    {
        echo "Hello $name you are $age years old<br>";
    }

    sayHi("Chris", 40);
    sayHi($_POST["fname"], $_POST["age"]);

    ?>



</body>

</html>