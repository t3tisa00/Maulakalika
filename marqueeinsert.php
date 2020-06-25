<?php
session_start();
if ( $_SESSION["Maulakalika"] != "OK") {
    header("location:adminlogin.php");
    
}
require 'config.php';
$topic = $_POST['topic'];
$link = $_POST['link'];

if(isset($_POST['mybutton'])){

  $sql ="INSERT INTO marquee(topic,link) VALUES ('$topic','$link')";
  
  if(mysqli_query($conn, $sql)){
      echo 'sucess';
      $sql2 = "SELECT id FROM marquee";
      $result = mysqli_query($conn, $sql2);
      $num = mysqli_num_rows($result);
      if($num > 8){
          $sql3= "DELETE FROM marquee LIMIT 1";
          mysqli_query($conn, $sql3);
      }
      
  } else {
      echo 'false';
}
}
?>
<h1> For the top notice of the home page in the marquee </h1>
<form action="" method="POST">
    Topic: <input type="text" name="topic" id="topic" required=""/> <br/> <br/><br><br>
    Topic Text: <input type="text" name="topic_text" id="topic_text" required=""/><br><br><br>
    Link: <input type="text" name="link" id="link" required=""/> <br/> <br/><br><br>
    <input type="submit" name="mybutton"  value="click here to add marquee notice">
    
</form>
  

