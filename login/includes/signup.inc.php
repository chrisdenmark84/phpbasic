<?php

if (isset($_POST["submit"])) {
    //Get data from form
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];


    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);


    // Running error handler and user signup
    $signup->signupUser();

    // Return to frontpage
    header("location: ../index.php?error=none");
} else {
    header("location: ../index.php?erro=nosubmit");
}
