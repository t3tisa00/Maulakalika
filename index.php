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
                    <li><a class="active" href="#">Home</a></li>
                   
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
            <div class="container">
            <div class="row section">
                
                    
                        <div class="col-sm-1" id="hariimage">
                            
                            <img src="images/haribhusal.jpg" height="130px" width="75px">
                        </div>      
                  
                      <div class="col-sm-3">
                            भरतपुर अस्पतालले चितवन र यस वरपरका ८ जिल्लाका ३५ लाख नागरिकलाई प्रत्यक्ष स्वास्थ्य सेवा पु¥याउदै आएको छ । 
                            ५१ प्रतिशत नागरिकको वसोवास रहेको तराईको वीच भाग, वाक्लो जनघनत्व भएको मध्य तथा पश्चिम नेपालको पहाडी भागसँग 
                            समिप तथा नेपाल कै केन्द्र भागमा रहेको भरतपुर मुलुकका सवैजसो भागसँग यातायातले जोडिएको छ । भरतपुर अस्पतालले आफ्नो ३१ 
                            विगाहा जमिनमा व्यवस्थित पूर्वाधार निर्माण गरि नेपाल कै एक नमुना केन्द्रिय अस्पतालको रुपमा विकास गर्न सकिने सम्भावना वोकेको छ । 
                            भरतपुर अस्पतालको निर्माणाधिन ए र वि ब्लक भवन पुरा गरि सि ब्लक भवन निर्माण शुरुवात गर्दै गुरुयोजनालाई पुरा गर्नु, सिटि स्क्यान, 
                            एमआरआई, क्याथल्याव लगायतका<a href="MDreadmore.php"><div id="readmore"><button>Read More</button></div> </a>

                        </div>

                
                <div class="col-sm-6">
                <div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 4</div>
  <img src="images/doctor.jpg" style="width:100%">
  <div class="text">Doctor</div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 4</div>
  <img src="images/nurshing .png" style="width:100%">
  <div class="text">Nursing</div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 4</div>
  <img src="images/vallystate.jpg" style="width:100%">
  <div class="text">Valleystate</div>
</div>
<div class="mySlides">
  <div class="numbertext">4/ 4</div>
  <img src="images/surgery.jpeg" style="width:100%">
  <div class="text">Surgery</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
   <span class="dot" onclick="currentSlide(4)"></span> 
</div>
                </div>

            
                <div class="col-sm-2">
                    <?php
                    require 'config.php';
                    $result = mysqli_query($conn, "SELECT *FROM marquee");
                    echo '<font><marquee behavior="scroll" direction="up" id="myMarquee" scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();">';
                    while ($row = mysqli_fetch_array($result)) {

                        echo '<a href="https://'. $row['link'] .'">' . $row['topic'] . '</a><br><br>';
                    }
                    echo "</font></marquee>";
                    ?>
                    <body onload="document.getElementById('myMarquee').start();">
                </div>

            </div>
            </div> 
            
      <div class="container">
        <div class="row newsfeed">  
            <h2> Important informations:</h2>
            </div>
            <div class="row news">
                 <?php
                                require 'config.php';
                                $sql = "SELECT * from newsfeed";
                              $Result = mysqli_query($conn , $sql);
                              while($row = mysqli_fetch_array($Result,MYSQLI_NUM)){
                                   echo "<table class='news'>";
                                   echo "<tr>";
                                   echo "<th>{$row['1']}</th>";
                                   echo "</tr>";
                                   echo "<tr>";
                                   echo "<td>{$row['2']}</td>";
                                   echo "</tr>";
                                   echo "</table>";
                                    
                                    
                                }
                                ?>
            </div>
        </div>
    </div>   
     <style>
                        #pop{
                        height:280px;
                        width:470px;
                        position:fixed;
                        bottom:40%;
                        right:25%;
                        border:2px solid;
                        padding:10px;
                        border-radius:9px;
                        background:yellow;
                        color:red;
                        }
                        #close{
                        right:5;
                        top:5;
                        float:right;
                        }
                        </style>
                        <div id="pop">
                        <button id ="close" onclick="document.getElementById('pop').style.display='none'"> X </button>
                        <h3 style="color:red; float:50%;">Attention !!!!</h3>
                        This is only for the demo and testing purpose all the information is not correct.
                        Once all testing is done then only it will finalize. 
                        </div>
    </body>
    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</html>

