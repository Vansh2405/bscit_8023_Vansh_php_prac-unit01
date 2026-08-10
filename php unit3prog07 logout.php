<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: php unit3prog06 login.php");
exit();
?>