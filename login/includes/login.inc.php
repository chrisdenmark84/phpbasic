<?php

if (isset($_POST["submit"])) {
    //Get data from form
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];


    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    $login = new loginContr($uid, $pwd);


    // Running error handler and user signup
    $login->loginUser();

    // Return to frontpage
    header("location: ../index.php?error=none");
}
