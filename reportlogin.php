
     
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

         <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
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
                    <li><a href="fetchconsultant.php">Consultants</a></li>
                    <li><a href="fetchmanagementteam.php">Management team</a></li>
                    <li><a class="active" href="reportlogin.php">Reports</a></li>
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
	<div class="container" style="margin-top:2em;">
  <div class="row">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
                <form action = "checkpatientlogin.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" name="btn" class="btn btn-success" value = " View Report "/><br />
               </form>
    
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
                   
               </div>
					
            </div>
				
         </div>
			
      </div>
      </div>
      </div>
   </body>
</html>


