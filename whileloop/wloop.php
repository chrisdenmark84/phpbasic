<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>

<body>



    <?php

    $index = 1;

    while ($index <= 5) {
        echo "$index <br>";
        $index++;
    }

    do {
        echo "$index <br>";
        $index++;
    } while ($index <= 5);

    ?>


</body>

</html>