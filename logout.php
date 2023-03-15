<?php
$_SESSION['session_username'] = "";
$_SESSION['session_password'] = "";
session_destroy();
header("location:login.php");
?>
