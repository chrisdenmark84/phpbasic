<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>


    <?php

    $names = array("Keith", "Sue", "Patch", "Chris");

    echo $names;
    echo "<br>$names[0]";

    $names[2] = "Archie";
    echo "<br>$names[2]";

    $names[4] = "Bog Brush";
    echo "<br>$names[4]<br>";

    echo count($names);


    ?>


</body>

</html>