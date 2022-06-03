<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>

<body>

    <form action="switch.php" method="POST">
        What was your grade? <input type="text" name="grade">
        <input type="submit">
    </form>


    <?php

    $grade = $_POST["grade"];
    echo $grade;

    ?>



</body>

</html>