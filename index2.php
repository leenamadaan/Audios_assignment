<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection


$email = $_POST['txt_eml'];


$query = "insert into notification(email) values('$email')";

$a = mysql_query($query);
$num = (int) $a;
if ($num > 0) {
    $_SESSION['MSG'] = "We will notify you";
} else {
    $_SESSION['MSG'] = "Your email id has not been submited.!!";
}
header("location:index.php");
?>
