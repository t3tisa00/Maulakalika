<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link href="imageslider.css" rel="stylesheet" type="text/css" />
        <script src="imageslider.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="generic.css" rel="stylesheet" type="text/css" />
        <link href="main.css" rel="stylesheet" type="text/css" />
        <title>Maulakalika Hospital</title>
</head>

 <body style="background-image:url(images/background.jpg)">
        <div class="container-fluid">
            <h1> MAULAKALIKA HOSPITAL </h1>
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <div class="w3-container">
                <ul class="w3-navbar w3-light-grey">
                    <li><a  href="index.php">Home</a></li>
                    <li class="w3-dropdown-hover">
                        <a   href="#">Services</a>
                        <div class="w3-dropdown-content w3-white w3-card-4">
                            <a href="maulaservices.php">Services at Maulakalika</a>
                            <a href="pharmacy.php">Pharmacy</a>
                            <a href="academic.php">Academic</a>
                            <a href="technology.php">Technology</a>
                            <a href="ambulance.php">Ambulance service</a>
                        </div>
                    </li>
                    <li><a class ="active" href="fetchconsultant">Consultants</a></li>
                    <li><a href="fetchmanagementteam.php">Management team</a></li>
                    <li><a href="reportlogin.php">Reports</a></li>
                    <li class="w3-dropdown-hover">
                        <a href="#">Programmes</a>
                        <div class="w3-dropdown-content w3-white w3-card-4">
                            <a href="nurshingcolz.php">Nurshing</a>
                            <a href="vallystate.php">BBA</a>
                            
                        </div>
                    </li>
                   
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div><br><br><br>
<?php
                               require 'config.php';
                               $id = filter_input(INPUT_GET, 'id');
                               $sql = "SELECT * from consultant WHERE id ='$id'";
                               $Result = mysqli_query($conn , $sql);
           while($row = mysqli_fetch_array($Result,MYSQLI_NUM)){

      echo "<table>";    
     echo"<tr>";
       echo" <th rowspan=6 colspan=3><img src=images/consultant/{$row['3']} id='image' </th><br><br>";
        echo"<th>Name </th>";
    echo"</tr>";
   echo"<tr>";
       echo" <td>{$row['1']} {$row['2']}</td>";
    echo"</tr>";
   echo" <tr>";
       echo" <th>Email</th>";
    echo"</tr>";
   echo" <tr>";
       echo" <td>{$row['5']}</td>";
    echo"</tr>";
    echo"<tr>";
       echo" <th>Phonenumber</th>";
    echo"</tr>";
   echo" <tr>";
       echo" <td>{$row['4']}</td><br>";
        
   echo" </tr>";
    echo"<tr>";
        echo"<th colspan=4>Degree</th>";
    echo"</tr>";
    echo"<tr>";
       echo"<td colspan=4>{$row['6']}</td>";
    echo"</tr>";
    
    
echo"</table>";
           }

