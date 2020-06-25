<?php  
                        include 'config.php';
                        if(isset($_POST['submit'])){
                            $image_name = $_FILES['image']['name'];
                            $image_type = $_FILES['image']['type'];
                            $image_size = $_FILES['image']['size'];
                            $image_tmp_name = $_FILES['image']['tmp_name'];
                            
                            if($image_name==''){
                            echo "<script>alert('please select an certificates')</script>";
                            } else {
                                move_uploaded_file($image_tmp_name,"images/NurshingDetail/certificates/$image_name");
                                
                            }
                            $photo_name = $_FILES['photo']['name'];
                            $photo_type = $_FILES['photo']['name'];
                            $photo_size = $_FILES['photo']['size'];
                            $photo_tmp_name = $_FILES['photo']['tmp_name'];
                            
                            if($photo_name==''){
                                echo "<script>alert('please select your citizenship')</script> ";
                            } else {
                                move_uploaded_file($photo_tmp_name,"images/NurshingDetail/citizenship/$photo_name");
                            }
                            
                            $photo1_name = $_FILES['photo1']['name'];
                            $photo1_type = $_FILES['photo1']['name'];
                            $photo1_size = $_FILES['photo1']['size'];
                            $photo1_tmp_name = $_FILES['photo1']['tmp_name'];
                            
                            if($photo1_name==''){
                                echo "<script>alert('please select your payment')</script> ";
                            } else {
                                move_uploaded_file($photo1_tmp_name,"images/NurshingDetail/payment/$photo1_name");
                            }
                        
                         
                         
                          $fn = $_POST['firstname'];
                          $ln = $_POST['lastname'];
                          $phonenumber = $_POST['phonenumber'];   
                           $email = $_POST['email'];
                           $slcsymbol = $_POST['slcsymbolno'];
                           $slcschool = $_POST['slcschool'];
                       
                        
                        $addSql = "INSERT INTO staffnurseform(firstname,lastname,phonenumber,email,slcsymbolno,slcschool,certificate,citizenship,payment) VALUES ('$fn','$ln','$phonenumber','$email','$slcsymbol','$slcschool','$image_name','$photo_name','$photo1_name')";
                        $res = $conn->query($addSql);
                    }
                
             else {
                echo "";
            }
      
            ?>
<form action="" method="post" enctype="multipart/form-data">
       First Name: <input type="text" name="firstname" id="firstname"/> <br/> <br/>
       Last Name: <input type="text" name="lastname" id="lastname"/> <br/> <br/>
       phone number: <input type="text" name="phonenumber" id="phonenumber"/> <br/> <br/>
        email: <input type="text" name="email" id="email"/> <br/> <br/>
        SLC Symbol Number:<input type="text" name="slcsymbolno" id="slcsymbolno"/> <br> <br>
        SLC School:<input type="text" name="slcschool" id="slcschool"/> <br> <br>
        
        <label for="file">Certificates:</label>
        <input type="file" name="image"><br><br>
              
       <label for="file">Select citizenship:</label>
        <input type="file" name="photo"><br><br>
        
        <label for="file">Reciept Image via esewa or bank voicher :</label>
        <input type="file" name="photo1"><br><br>
         
                <input type="submit" name="submit" value="Upload">
  </form>

