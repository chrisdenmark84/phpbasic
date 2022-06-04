<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
</head>

<body>


    <?php

    class Movies
    {
        public $titles;
        private $rating;

        function __construct($title, $rating)
        {
            $this->titles = $title;
            $this->setRating($rating);
        }


        function getRating()
        {
            return $this->rating;
        }

        function setRating($rating)
        {
            if ($rating == "PG" || $rating == "13" || $rating == "15" || $rating == "18+") {
                $this->rating = $rating;
            } else {
                $this->rating = "NR";
            }
        }
    }


    $movie1 = new Movies("Wizard of Oz", "Poo");

    echo $movie1->titles;
    echo $movie1->getRating();
    echo $movie1->setRating("PG");
    echo $movie1->getRating();

    ?>

</body>

</html>