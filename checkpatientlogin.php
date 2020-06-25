<?php
include 'config.php';
if(isset($_POST["btn"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql="SELECT * FROM patientinfo WHERE patient_username='$username' AND patient_password ='$password'";
    $result1 = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result1);

    if ($count==1)
    {
        
        
        header('Location:viewreport.php?username='.$username);
        
        
    }
 else {

        echo 'the username and password is incorrect, try again'; 
        
    }
}
?>

