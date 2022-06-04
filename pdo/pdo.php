<?php
//https://www.youtube.com/watch?v=yWJFbPT3TC0&ab_channel=DaniKrossing
include_once 'dbh.inc.php';
include_once 'user.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Connection</title>
</head>

<body>

    <?php
    // Shows availible db drivers
    // print_r(PDO::getAvailableDrivers());

    //Creates a connection using
    $object = new Dbh;
    $object->connect();

    //$object2 = new User;
    //echo $object2->getAllUsers();

    //   $object3 = new User;
    //    echo $object3->getUserWithCountCheck();



    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        Search ID: <input type="number" name="id">
        <input type="submit">
    </form>

    <?php
    //Id search using function getUserWithCountCheck passing in user submitted ID
    //TODO: I couldn't get it to echo output when sanitising input oddly
    $object5 = new User;
    echo $object5->getUserWithCountCheck($_POST['id']);
    ?>

</body>

</html>