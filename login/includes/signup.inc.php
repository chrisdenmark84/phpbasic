<?php

if (isset($_POST["subimt"])) {
    //Get data from form
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];


    // Instantiate SignupContr class
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);


    // Running error handler and user signup


    // Return to frontpage






}
