<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>

<body>


    <?php

    $index = 1;
    while ($index <= 5) {
        echo "$index <br>";
        $index++;
    }

    for ($i = 1; $i <= 5; $i++) {
        echo "$i <br>";
    }

    $luckynumbers = array(4, 6, 8, 32);

    for ($i = 0; $i < count($luckynumbers); $i++) {
        echo "$luckynumbers[$i] <br>";
    }

    ?>


</body>

</html>