<?php
session_start();
unset($_SESSION['Email']);
unset($_SESSION['Pass']);
unset($_SESSION["accType"]);
$_SESSION["x"]=0;
header("Location: signin.php");


?>