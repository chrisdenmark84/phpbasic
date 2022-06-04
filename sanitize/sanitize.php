<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sanitize</title>
</head>

<body>

    <?php

    class person
    {
        private $name;
        private $age;

        function __construct($name, $age)
        {
            $this->setName($name);
            $this->setAge($age);
        }

        function getName($name)
        {
            return $this->name;
        }

        function setName($name)
        {
            $this->name = $name;
        }

        function getAge($age)
        {
            return $this->age;
        }

        function setAge($age)
        {
            $this->age = $age;
        }
    }



    if (isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
        $createPerson = new person($name, $age);
    }

    ?>


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        Name: <input type="text" name="name">
        Age: <input type="number" name="age">
        <input type="submit" name="submit">

    </form>

    <?php

    echo $createPerson->getName($name);
    echo $createPerson->getAge($age);

    ?>

</body>

</html>