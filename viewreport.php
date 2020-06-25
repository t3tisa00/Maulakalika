
<link  href="main.css" rel="stylesheet" type="text/css">
<h1>Here is your report</h1>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include 'config.php';


$username = filter_input(INPUT_GET, 'username');
$sql = "SELECT * from patientinfo WHERE patient_username = '$username'";
$result = mysqli_query($conn , $sql);

while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
     echo "<img src=images/Reports/{$row['2']} id ='report_image'><br><br>";
     echo "Hello:{$row['1']}<br> Your condition :{$row['7']}<br>";
     echo "<a href=images/Reports/{$row['2']} download ><button>Click here to download your report</button></a>";
}


