<?php
//test
if (isset($_SESSION['userid'])) { ?>
    </br><a href="includes/logout.inc.php">Logout</a>
<?php
} else {
    echo "</br>Login";
}
?>