<!--mail is got sent thank you--> 
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'config.php';

//$username = $_GET["username"];
$patient_username = filter_input(INPUT_GET, 'patient_username');
$sql = "SELECT * from patientinfo WHERE patient_username = '$patient_username'";
$result = mysqli_query($conn, $sql);
echo 'Mail is got';

// set array
$array = array();

// look through query
while($row = mysql_fetch_array($result,MYSQLI_NUM)){

    // add each row returned into an array
    $array[] = $row;

    // OR just echo the data:
    
    $to = $row['patient_email'];
    $subject = "your report is ready";
    $txt = "You can view your report by clicking the link reportlogin.php 
            Link to login page
            with username:{$row['patient_username']} and password:{$row['patient_password']}";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers = "From: satkar.tiwari1@gmail.com" . "\r\n" .
            "CC: somebodyelse@example.com";

    mail($to, $subject, $txt, $headers);
}

// debug:
//print_r($array); // show all array data
//echo $array[0]['username'];
//
//
//
//
//while($row = mysql_fetch_array($result,MYSQLI_NUM)){
//    $to = "{$row['5']}";
//    $subject = "your report is ready";
//    $txt = "You can view your report by clicking the link reportlogin.php 
//            Link to login page
//            with username:{$row['8']} and password:{$row['9']}";
//            
//    $headers = "From: satkar.tiwari1@gmail.com" . "\r\n" .
//    "CC: somebodyelse@example.com";
//    
//    mail($to,$subject,$txt,$headers);
//    
//    
//}


