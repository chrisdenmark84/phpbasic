<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>

<body>

    <?php include "header.html" ?>

    <?php
    $title = "My First Post";
    $author = "Chris";
    $wordCount = 404;
    include "article-header.php"
    ?>

    <hr>

    <?php include "tools.php" ?>

    <?php echo sayHi("Chris");
    echo  $feetInMiles ?>

    <?php include "footer.html" ?>
</body>

</html>