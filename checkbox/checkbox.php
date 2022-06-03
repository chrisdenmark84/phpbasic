<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>

<body>

    <form action="checkbox.php" method="POST">

        Apples<input type="checkbox" name="fruits[]" value="apples">
        Bananas<input type="checkbox" name="fruits[]" value="bananas">
        Pears<input type="checkbox" name="fruits[]" value="pears">

        <input type="submit">
    </form>

    <?php

    $fruits = $_POST["fruits"];
    echo $fruits[0];

    ?>


</body>

</html>