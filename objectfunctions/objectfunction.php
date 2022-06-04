<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Functions</title>
</head>

<body>

    <?php

    class student
    {

        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa)
        {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonours()
        {
            if ($this->gpa >= 3.5) {
                return "true";
            }
            return "false";
        }
    }


    $student1 = new student("Chris", "Arts", 2.5);
    $student2 = new student("Archie", "Animal Care", 3.7);

    echo $student1->hasHonours();
    echo $student2->hasHonours();
    ?>


</body>

</html>