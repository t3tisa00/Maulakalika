<?php
session_start();
if ($_SESSION["Maulakalika"] != "OK") {
    header("location:adminlogin.php");
}


require 'config.php';
$topic = $_POST['topic'];
$newsarticle = $_POST['newsarticle'];

if(isset($_POST['mybutton'])){

  $sql ="INSERT INTO newsfeed(topic,newsarticle) VALUES ('$topic','$newsarticle')";
  
  if(mysqli_query($conn, $sql)){
      echo 'sucess';
      $sql2 = "SELECT id FROM newsfeed";
      $result = mysqli_query($conn, $sql2);
      $num = mysqli_num_rows($result);
      if($num > 8){
          $sql3= "DELETE FROM newsfeed LIMIT 1";
          mysqli_query($conn, $sql3);
      }
      
  } else {
      echo 'false';
}
}
?>
<h1> This is the form to enter the news and the news topic </h1>
<form action="" method="POST">
    Topic: <input type="text" name="topic" id="topic" required=""/> <br/> <br/><br><br>
    News content:<textarea rows="8" cols="150" name="newsarticle" id="newsarticle"></textarea><br><br><br>
    
    
    <input type="submit" name="mybutton"  value="click here to add newsarticle">
    
</form>
  



