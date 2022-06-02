<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <?php
    echo "This is a string!<br>";
    $phrase = "This is another string<br>";
    echo $phrase;

    echo strtolower($phrase);
    echo strtoupper($phrase);
    echo strlen($phrase);
    echo $phrase[0];

    echo $phrase[0] = "t";
    echo $phrase;

    echo str_replace("this", "that", $phrase);
    echo $phrase;

    echo substr($phrase, 16, 6);

    echo "<br><hr>PHP STRING FUNCTIONS FOR MORE INFO"

    ?>
</body>

</html>