<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body>
    <form action="assarray.php" method="POST">

        <input type="text" name="student">
        <input type="submit">

    </form>


    <?php

    $grades = array("Keith" => "A+", "Sue" => "B+", "Archie" => "B", "Chris" => "B");
    echo $grades["Sue"];

    $grades["Chris"] = "D";
    echo $grades['Chris'];

    echo $grades[$_POST["student"]];


    ?>




</body>

</html>