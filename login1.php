

<?php

ob_start(); //start obeject
session_start(); //start session

include('connection/dbconfig.php');


//click on submit button
if (isset($_POST['btnlogin'])) {

    //variable and validation
    $error_msg = '';
    $row_effected = 0;
    $status = false;


    /*$loginas = $_POST['rdologin']; //email id
    if ($loginas == '') {
        $error_msg.="Please, Select login as field.!!";
    }*/


    $email = $_POST['txtemailid']; //email id

    if ($email == '') {
        $error_msg.="Email id field cannot be left blank.!!";
    }

    $password = $_POST['txtpass']; //password

    if ($password == '') {
        $error_msg.="Password field cannot be left blank.!!";
    }

    //query for login
    if ($error_msg == '') {

               
            $query = "select name from registration1 where email='$email' and password = '$password'";
            $result = mysql_query($query);
            while ($row = mysql_fetch_array($result)) {
                $name = $row ['name'];
                if ($name != '') {
                    $_SESSION['USERID'] = $name; //patienthome
                    $_SESSION['NAME'] = $row ['name'];
                    header("location:product.php");
                } else {
                    $_SESSION['MSG'] = "Email id and password are wrong.!!"; //patienthome
                    header("location:login.php");
                }
            }
        }

 

     else {
        $_SESSION['MSG'] = $error_msg; //set message in sessiong
        header("location:login.php");
    }
}
?>
