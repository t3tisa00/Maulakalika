<?php  
session_start();
if ( $_SESSION["Maulakalika"] != "OK") {
    header("location:adminlogin.php");
    
}
                        include 'config.php';
                        if(isset($_POST['submit'])){
                            $image_name = $_FILES['image']['name'];
                            $image_type = $_FILES['image']['type'];
                            $image_size = $_FILES['image']['size'];
                            $image_tmp_name = $_FILES['image']['tmp_name'];
                            
                            if($image_name==''){
                            echo "<script>alert('please select an certificates')</script>";
                            } else {
                                move_uploaded_file($image_tmp_name,"images/consultant/$image_name");
                                
                            }
                            
                          $fn = $_POST['firstname'];
                          $ln = $_POST['lastname'];
                          $phonenumber = $_POST['phonenumber'];   
                           $email = $_POST['email'];
                           $degree = $_POST['degree'];
                           
                       
                        
                        $addSql = "INSERT INTO consultant(firstname,lastname,phonenumber,email,image,degree) VALUES ('$fn','$ln','$phonenumber','$email','$image_name','$degree')";
                        $res = $conn->query($addSql);
                    }
                
             else {
                echo "Invalid file";
            }
      
            ?>
<form action="" method="post" enctype="multipart/form-data">
       First Name: <input type="text" name="firstname" id="firstname"/> <br/> <br/>
       Last Name: <input type="text" name="lastname" id="lastname"/> <br/> <br/>
       phone number: <input type="text" name="phonenumber" id="phonenumber"/> <br/> <br/>
        email: <input type="text" name="email" id="email"/> <br/> <br/>
        
        
        <label for="file">Doctor Image:</label>
        <input type="file" name="image"><br><br>
         Academic Degree: <input type="text" name="degree" id="degree"/> <br/> <br/>
        
         <input type="submit" name="submit" value="Upload">
  </form>

