<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Comparisons</title>
</head>

<body>

    <?php

    function getMax2($num1, $num2)
    {
        if ($num1 > $num2) {
            return $num1;
        } else {
            return $num2;
        }
    }

    echo getMax2(101, 10);

    function getMax3($num1, $num2, $num3)
    {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }

    echo getMax3(10, 13, 7);

    ?>


</body>

</html>