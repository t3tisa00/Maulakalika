<?php
session_start();
if ( $_SESSION["Maulakalika"] != "OK") {
    header("location:adminlogin.php");
    
}
 include 'config.php';

            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);
            if (($_FILES["file"]["size"] < 209715222) // 2 MB
                    && in_array($extension, $allowedExts)) {
                if ($_FILES["file"]["error"] > 0) {
                    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                } else {
                    "Upload: " . $_FILES["file"]["name"] . "<br>";
                    "Type: " . $_FILES["file"]["type"] . "<br>";
                    "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                    "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

                    if (file_exists("/htdocs/Maulakalika/images/managementteamphoto/" . $_FILES["file"]["name"])) {
                        echo $_FILES["file"]["name"] . " already exists. ";
                    } else {
                          
                        move_uploaded_file($_FILES["file"]["tmp_name"], "images/managementteamphoto/" . $_FILES["file"]["name"]);
                       
                        echo " successfully uploaded ";
                        
                       
                        
                          $n = $_FILES["file"]["name"];
                          $t = $_FILES["file"]["type"];
                          $s = $_FILES["file"]["size"];
                          $name = $_POST['name'];
                          $position = $_POST['position'];
                          $phonenumber = $_POST['phonenumber'];   
                           $email = $_POST['email'];
                        $a = "images/managementteamphoto/" . $_FILES["file"]["name"];
                        echo "hi";
                        $addSql = "INSERT INTO managementteam(name,Image_Name,Image_Type,Image_Size,Image_Location,phonenumber,email,position) VALUES ('$name','$n','$t','$s','$a','$phonenumber','$email','$position')";
                        $res = $conn->query($addSql);
                    }
                }
            } else {
                echo "Invalid file";
            }
      
            ?>

<form action="" method="post"
                  enctype="multipart/form-data">
       Name: <input type="text" name="name" id="name"/> <br/> <br/>
       
        <label for="file">Upload Image:</label>
        <input type="file" name="file" id="file"><br><br>
       
        Position:<input type="text" name="position" id="position"> <br><br>
        
        phone number: <input type="text" name="phonenumber" id="phonenumber"/> <br/> <br/>
        
              email: <input type="text" name="email" id="email"/> <br/> <br/>
              
                <input type="submit" name="submit" value="Upload">
  </form>

