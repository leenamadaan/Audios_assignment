<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection

$name = $_POST['txt_name'];
$phone = $_POST['txt_phone'];
$email = $_POST['txt_eml'];
$s_model = $_POST['txt_mod'];
$s_quality = $_POST['txt_qs'];
$s_remarks = $_POST['txtarearemarks'];


$query = "insert into feedback(name,phone,email,s_model,s_quality,s_remarks) values('$name','$phone','$email','$s_model','$s_quality','$s_remarks')";

$r = mysql_query($query);
$num = (int) $r;
if ($num > 0) {
    $_SESSION['MSG'] = "Your feedback has been successfully submited.!!";
} else {
    $_SESSION['MSG'] = "Your information has not been submited.!!";
}
header("location:feedback.php");
?>