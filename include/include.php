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
    <p>Some information. Some information. Some information. Some information. Some information. Some information. Some information. Some information. Some information. Some information. Some information. Some information. Some information. </p>


    <?php include "footer.html" ?>
</body>

</html>