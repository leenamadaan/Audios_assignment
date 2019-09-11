<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection

$name = $_POST['txt_name'];
$phone = $_POST['txt_phone'];
$address = $_POST['txt_adrs'];
$email = $_POST['txt_eml'];
$password = $_POST['txt_pass'];

$query = "insert into registration1(name,phone,address,email,password) values('$name','$phone','$address','$email','$password')";

$r = mysql_query($query);
$num = (int) $r;
if ($num > 0) {
    $_SESSION['MSG'] = "Your information has been successfully submited.!!";
} else {
    $_SESSION['MSG'] = "Your information has not been submited.!!";
}
header("location:Registration.php");
?>
