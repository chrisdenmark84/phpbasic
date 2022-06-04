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
    <h2>Search by User ID</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="idsearch">
        Search ID: <input type="number" name="id">
        <input type="submit" name="idbtn">
    </form>
    <hr>
    <?php
    //Id search using function getUserWithCountCheck passing in user submitted ID
    //TODO: I couldn't get it to echo output when sanitising input oddly
    if ($_POST['idbtn']) {
        $object5 = new User;
        echo $object5->getUserWithCountCheck($_POST['id']);
    }

    ?>
    <h2>Submit User</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="adduser">
        First Name: <input type="text" name="fname">
        Last Name: <input type="text" name="lname">
        Date of Birth: <input type="date" name="dob">
        <input type="submit" name="addBtn">
    </form>

    <?php
    if ($_POST['addBtn']) {
        $addUser = new User;
        $addUser->setUser($_POST['fname'], $_POST['lname'], $_POST['dob']);
    }
    ?>
</body>

</html>