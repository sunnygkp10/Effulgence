
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>EFFULGENCE'15 | A National Level Technical Fest of KNIT Sultanpur</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/neon1.png" type="image/x-icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
<meta name="keywords" content="KNIT,Technical Fest,Kamla Nehru Institute of Technology,Sultanpur, Technical Extravaganza, India, Asia, best, biggest, largest, UPTU, GBTU, students, Uttar Pradesh, country, campaign, initiative, sponsor, games, Tech, Software Corner, Circuitus, Machinamentum, Robotum, Presentio, Fovea, informal, Sunny Waghela, shwet mishra,shwet,shwet kamal mishra, Shwet,vipin srivastava,vipin kumar srivastava, Vipin, Sunny prakash tiwari, sunny, sunny,sunnygkp10,Nirupam Singh,Nirupam,awesome, most creative campaign, revolution, social, exhibitions, iit, fest, techfest, workshops, codechef, 2015, 2014-15, iit, bombay, smart, city, challenge, ask, fullthrottle, gamechanger">
<link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
  <link rel="stylesheet" href="css/animate.min.css">
   <script src="js/time.js" type="text/javascript"></script>  
  <!-- Preloader --><script type="text/javascript">// <![CDATA[
$(window).load(function() { $("#spinner").fadeOut("slow"); })
// ]]></script>
    <link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'>


</head>
<body><div id="spinner">
	<center>
	<img class="rotate" src="img/724.GIF"/>
	</div><br>
	</center>
	</div>

 
<div  id="particles-js"></div>
<div class="row top">
<div class="col-md-7" id="knitname"><h3><img src="img/knit.png" height="90" width="90" style="margin-right:20px; margin-left:20px; float:left" /><a href="http://knit.ac.in">Kamla Nehru Institute of Technology Sultanpur</a></h3>
<p>(An Autonomous Govt. Institute)</p></div>
  
	<div class="col-md-1"></div>
  <div class="col-md-4" >
  <?php
session_start();
  if(!(isset($_SESSION['u_id']))){

echo '<a href="log.php"><button class="sunny" style="float:right">login</button></a><a href="registers.php"><button class="sunny" style="float:right">signup</button></a><a href="http://www.ticketinvert.com/events/Event.php?eventid=25145"><button class="sunny" style="float:right">ALUMNI Contribution</button></a>';
}
else
{
$u_id = $_SESSION['u_id'];
include_once 'dbConnection.php';
$query=mysqli_query($con,"SELECT name FROM users WHERE u_id='$u_id'");
	while($row = mysqli_fetch_array($query)) {
	$name = $row['0'];
	}
echo '<a href="logout.php"><button class="sunny pull-right" style="position:relative">logout</button></a><b><span class="pull-right sny" >Hello,  <a href="user_profile.php">'.$name.'</a></b></span>';
}?>
  
</div></div>
	
	
	 
	 	
<div class="row">
<div class=" col-md-3">
	<ul class="ca-menu">
	        <li>
                        <a href="about.php">
                            <!--<span class="ca-icon">A</span>-->
                            <div class="ca-content">
                                <h2 class="ca-main">About</h2>
                                <h3 class="ca-sub">Effulgence'15</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="events.php">
                           <!-- <span class="ca-icon">I</span>-->
                            <div class="ca-content">
                               <h2 class="ca-main">Events</h2>
                                <h3 class="ca-sub">Do you have It in You?</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="workshops.php">
                           <!-- <span class="ca-icon">C</span>-->
                            <div class="ca-content">
                                <h2 class="ca-main">Workshops</h2>
                                <h3 class="ca-sub">Learn From the experts</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="registers.php">
                           <!-- <span class="ca-icon">S</span>-->
                            <div class="ca-content">
                                <h2 class="ca-main">Register</h2>
                                <h3 class="ca-sub">Be with us</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="contactus.php">
                            <!--<span class="ca-icon">d</span>-->
                            <div class="ca-content">
                                <h2 class="ca-main">Contact Us</h2>
                                <h3 class="ca-sub">24x7</h3>
                            </div>
                        </a>
                    </li>
					<li>
					<a href="sponsors.php">
                            <!--<span class="ca-icon">d</span>-->
                            <div class="ca-content">
                                <h2 class="ca-main">Sponsors</h2>
                                <h3 class="ca-sub">Strengthening Partnerships</h3>
                            </div>
                        </a>
                    </li>
                </ul>
	</div>
	
	<div class="bich col-md-7">
	<center><img src="img/neon1.png" class="neon" height="130" width="130" /></center>
   
	<h1 class="neon zoomIn" style="text-align:center; margin-top:0px;"><b>EFFULGENCE</b></h1>
	<center>
	<p>Battle of Illuminati</p>
	<p>3-5 April 2015</p>
	<div class="timerbtn"><span id="countdown" class="timer"></span></div>
	</center>
	</div>
	<div class="col-md-2">
	</div>
	</div>  
  

  














</div>

<!--partical.js end-->

<script src="js/particles.js"></script>
<script src="js/app.js"></script>
</body>
</html>
