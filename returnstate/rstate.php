<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Statments</title>
</head>

<body>

    <form action="rstate.php" method="POST">
        <input type="number" name="cubeInput">
        <input type="submit">
    </form>


    <?php

    function cube($num)
    {
        return $num * $num * $num;
    }

    $cubeResult = cube($_POST["cubeInput"]);
    echo $cubeResult;

    echo cube($_POST["cubeInput"]);

    ?>


</body>

</html>