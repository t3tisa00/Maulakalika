<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link href="imageslider.css" rel="stylesheet" type="text/css" />
        <script src=imageslider.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="generic.css" rel="stylesheet" type="text/css" />
        <link href="main.css" rel="stylesheet" type="text/css">
        <title>Maulakalika Hospital</title>
        <style>
  
.overlay {
  position: absolute;
  bottom: 100%;
  background-color: #008CBA;
  overflow: hidden;
  width: 90%;
  height:0;
  transition: .5s ease;
  
}

.abc:hover .overlay {
  bottom: 0;
  height: 100%;
  width: 98%;
  left:0;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 0.90em;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
#image{
    height: 25em;
    width: 100%;
    border: 0.1em solid #4CAF50;
    margin-bottom :2em;

    
}
</style>

    </head>
 <body>
                
         <div class="container">
             <div class="row">
                 <div class="col-sm-6 header">
                     <h1> Maulakaika Hospital</h1>
                 </div>
                
                <div class="col-sm-6 pull-right dateandtime">
              
                      <script>
                              var currentDate = new Date(),
                              day = currentDate.getDate(),
                              month = currentDate.getMonth() + 1,
                              year = currentDate.getFullYear();
                              document.write(day + "/" + month + "/" + year)
                    </script>
                </div>
             </div>
        </div>
       <div class="container">
       
         
            <div class="w3-container">
                <ul class="w3-navbar w3-light-grey">
                    <li><a  href="index.php">Home</a></li>
                   
                    <li class="w3-dropdown-hover">
                        <a href="maulaservices.php">Services</a>
                        <div class="w3-dropdown-content w3-white w3-card-4">
                            <a href="maulaservices.php">Services at Maulakalika</a>
                            <a href="pharmacy.php">Pharmacy</a>
                            <a  href="academic.php">Academic</a>
                            <a href="technology.php">Technology</a>
                            <a href="ambulance.php">Ambulance service</a>
                        </div>
                    </li>
                    <li><a class="active" href="fetchconsultant.php">Consultants</a></li>
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
            
            </div>
            </div>

<div class="container consultbox">
  <div class="row ">

    <h2> Here are our Consultant team</h2>
    </div>
    <div class="row">
    
      <?php
include 'config.php';

$sql = "SELECT * from consultant";
$result = mysqli_query($conn , $sql);

while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
        
        echo "<a href='doctorinfo.php?id={$row['0']}'>";
        echo "<div class='col-sm-3 abc'>";   
        echo "<img src=images/consultant/{$row['3']} id ='image'>";
        echo "<div class ='overlay'>";
        echo "<div class='text'>Name:{$row['1']} {$row['2']}<br> Contact in case of Emergency:{$row['4']} <br> Email:{$row['5']}<br>{$row['6']}";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</a>";
        

}
?>
    </div>
           

  </div>
</div>

</body>
</html>


     
