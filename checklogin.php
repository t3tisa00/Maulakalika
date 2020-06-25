<?php

session_start();
//if ( $_SESSION["Maulakalika"]!= 'true') {
//    header("location:adminlogin.php");
//}
//include 'config.php';

$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);

$myusername="satkar";
$mypassword="tiwari";

$myusernameh= password_hash($myusername,PASSWORD_DEFAULT);
$mypasswordh=  password_hash($mypassword, PASSWORD_DEFAULT);

$isCorrect1= password_verify($username, $myusernameh);
$isCorrect2 = password_verify($password, $mypasswordh);

if ($isCorrect1 == 1  && $isCorrect2 == 1) {

    $_SESSION["Maulakalika"] = "OK";
    header("location:logintrue.php");
} else {
    echo"Wrong Username or Password";
    header("Refresh: 5;adminlogin.php");
    $_SESSION["Maulakalika"] = "NOT OK";
}

     

