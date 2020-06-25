
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
 ob_start();
include 'config.php';
session_start();
if(isset($_POST["btn"]))
{
    $username = $_POST["username"];

    $password = bcrypt($_POST['password']);
    $sql="SELECT * FROM patientinfo WHERE patient_username='$username' AND patient_password ='$password'";
    $result1 = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result1);
    
    
    

    if (password_verify($password,$hashed_password))
    {
        
       /* $_SESSION["Something"]= "OK";*/
        $_SESSION["username"]= $username;
        header('Location:https://www.maulakalikahospital.com.np/viewreport.php');
        
        
    }
 else {
        
        echo 'the username and password is incorrect, try again'; 
        
       header("Refresh:3; reportlogin.php");
        $_SESSION["Something"]="NOT OK";
        
    }
}
ob_end_flush();
?>