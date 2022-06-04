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

        function __construct($aTitle, $aAuthor, $aPages)
        {
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;

            echo "<h2><hr><br>New Book $this->title Created <br></h2>";
        }
    }

    $book1 = new Book("PHP for Beginners", "Chris", 404);
    /*$book1->title = "PHP for beginners";
    $book1->author = "Chris";
    $book1->pages = 404;
    */
    echo $book1->title;
    echo $book1->author;
    echo $book1->pages;

    $book2 = new Book("Lord of the Rings", "Tolkien", 1404);
    /*$book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 1400;
    */
    echo $book2->title;
    echo $book2->author;
    echo $book2->pages;


    //constructor function making object creation ecpc
    $book3 = new Book("DIY GOLF", "T Woofs", 420);
    echo $book3->title;
    echo $book3->author;
    echo $book3->pages;

    ?>



</body>

</html>