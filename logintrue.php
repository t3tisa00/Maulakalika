<?php 

session_start();
if ( $_SESSION["Maulakalika"]!= "OK") {
    header("location:adminlogin.php");
   
} 
include 'config.php';
?>

<h1>Admin Controller Page For control whole site</h1>
<a href="managementteam.php"><button>Click here to manage management team</button></a><br><br>
<a href="consultant.php"><button>Click here to manage consultant team</button></a><br><br>
<a href="marqueeinsert.php"><button>Click here to insert marquee </button></a><br><br>
<a href="newsfeedenter.php"><button>Click here to add news feed </button></a><br><br>
<a href="insertpatientinfo.php"><button>Click here to insert patient info </button></a><br><br>




