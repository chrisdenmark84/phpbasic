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

    $grade = strtoupper($_POST["grade"]);
    echo $grade;

    switch ($grade) {
        case "A":
            echo "<br>You did amazing!";
            break;
        case "B":
            echo "<br>Great job!";
            break;
        case "C":
            echo "<br>Good effort. Come see me for more feedback.";
            break;
        case "D":
            echo "<br>More work required. Revisit the source material";
            break;
        case "E":
            echo "<br>Let's chat. This wasn't what we were looking for";
            break;
        case "F":
            echo "<br>That's failed. Let's chat";
            break;
        default:
            echo "<br>Invalid Grade";
    }


    ?>



</body>

</html>