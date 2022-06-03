<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs Game</title>
</head>

<body>


    <form action="game.php" method="GET">
        Colour: <input type="text" name="colour">
        Plural Noun: <input type="text" name="pnoun">
        Celebrity: <input type="text" name="celeb">
        <input type="submit">
    </form>

    <?php

    $colour = strtolower($_GET['colour']);
    $pnoun = strtolower($_GET['pnoun']);
    $celeb = $_GET['celeb'];

    echo "Roses are $colour <br>";
    echo "$pnoun are blue<br>";
    echo "I love $celeb <br>";

    ?>


</body>

</html>