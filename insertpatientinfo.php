<?php
session_start();
if ($_SESSION["Maulakalika"] != "OK") {
    header("location:adminlogin.php");
}

  if (isset($_POST['submit'])) {


    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];

    if ($image_name == '') {
        echo "<script>alert('please select an report')</script>";
    } else {
        move_uploaded_file($image_tmp_name, "images/Reports/$image_name");
    }

    $patient_name = $_POST['patient_name'];
    $patient_address = $_POST['patient_address'];
    $patient_dob = $_POST['patient_dob'];
    $patient_phonenumber = $_POST['patient_phonenumber'];
    $patient_email = $_POST['patient_email'];
    $patient_conditiontext = $_POST['patient_conditiontext'];
    $patient_username = $_POST['patient_username'];
    $patient_password = $_POST['patient_password'];

    //For making unique username
  

    $con=mysqli_connect("localhost","root","","Maulakalika") ;
    mysqli_select_db($con,"Maulakalika");

    $query=mysqli_query($con,"SELECT * from patientinfo WHERE patient_username='$patient_username'");
    if(mysqli_num_rows($query)>0)
    {
        echo "username already exist";
    }
    else
    {


    $query = mysqli_query($con,"INSERT INTO patientinfo(patient_name,patient_address,patient_dob,patient_email,patient_phonenumber,patient_conditiontext,patient_username,patient_password,reportphoto_name) "
            . "VALUES"
            . " ('$patient_name','$patient_address','$patient_dob','$patient_email','$patient_phonenumber','$patient_conditiontext', '$patient_username','$patient_password','$image_name')");
    echo "data insert";
    
    header('Location:sendnotification.php?patient_username=' . $patient_username);
}
}
?>

<form action="" method="post"
      enctype="multipart/form-data">
    Patient Name: <input type="text" name="patient_name" id="patient_name"/> <br/> <br/>

    Patient Address: <input type="text" name="patient_address" id="patient_address"/> <br/> <br/>
    Patient DOB: <input type="text" name="patient_dob" id="patient_dob"/> <br/> <br/>
    Patient Email: <input type="text" name="patient_email" id="patient_email"/> <br/> <br/>
    Patient Phonenumber: <input type="text" name="patient_phonenumber" id="patient_phonenumber"/> <br/> <br/>

    <label for="file">Upload Report:</label>
    <input type="file" name="image" id="image"><br><br>
    Patient Condition:<input type="text" name="patient_conditiontext" id="patient_conditiontext"/><br><br>

    
      Username:<input type="text" name="patient_username" id="patient_username" ><br><br>


    Patient Password: <input type="password" name="patient_password" id="patient_password"/> <br/> <br/>

    <input type="submit" name="submit" value="Upload">
</form>



