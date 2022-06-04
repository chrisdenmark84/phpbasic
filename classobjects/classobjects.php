<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and Objects</title>
</head>

<body>

    <?php

    class Book
    {
        var $title;
        var $author;
        var $pages;
    }

    $book1 = new Book;
    $book1->title = "PHP for beginners";
    $book1->author = "Chris";
    $book1->pages = 404;

    echo $book1->title;
    echo $book1->author;
    echo $book1->pages;

    $book2 = new Book;
    $book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 1400;

    echo $book2->title;
    echo $book2->author;
    echo $book2->pages;


    ?>



</body>

</html>