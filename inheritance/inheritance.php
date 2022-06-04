<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inheritance</title>
</head>

<body>


    <?php

    class Chef
    {

        function makeChicken()
        {
            echo "make Chicken!";
        }

        function makeSalad()
        {
            echo "make Salad";
        }

        function makeSpecial()
        {
            echo "make BBQ Ribs!";
        }
    }

    class BritishChef extends Chef
    {

        function makeGrull()
        {
            echo "make Grull!";
        }

        function makeSpecial()
        {
            echo "make Fish n Chips!";
        }
    }

    $chef1 = new Chef;
    $chef1->makeChicken();
    $chef1->makeSpecial();
    $chef2 = new BritishChef;
    $chef2->makeChicken();
    $chef2->makeSpecial();

    ?>


</body>

</html>