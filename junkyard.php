<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>EFFULGENCE'15 | EVENTS</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/neon1.png" type="image/x-icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
<link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
  <link rel="stylesheet" href="css/animate.min.css">  
  <!-- Preloader --><script type="text/javascript">// <![CDATA[
$(window).load(function() { $("#spinner").fadeOut("slow"); })
// ]]></script>

<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="spinner">
	<center>
	<img class="rotate" src="img/724.GIF"/>
	</div><br>
	</center>
	</div>
 
<div  id="particles-js"></div>
<div class="row top">
<div class="col-md-7 bich1">
<a href="index.php">
<img src="img/neon1.png" height="100" width="120"  style="float:left; margin:10px; padding:10px; margin-left:-50px; margin-top:30px;">
   <h1 class="neon zoomIn eff" >EFFULGENCE'15</h1>
	<p class="bat">Battle of Illuminati</p></a>
  </div>
  <div class="col-md-1"></div>
  <div class="col-md-4" >
  <?php
session_start();
  if(!(isset($_SESSION['u_id']))){

echo '<a href="log.php"><button class="sunny" style="float:right">login</button></a><a href="registers.php"><button class="sunny" style="float:right">signup</button></a>';
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
  
  </div>
  </div>
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
                            <div class="ca-content active">
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
	<div class="col-md-7">
	<div class="area1">
	<h3><b>JUNKYARD</b></h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">


<p>People use to talk about hard work, labour, consistency and it seems good talk from some of the favourite tongue but when we talk about reality a painted picture undergoes a sudden change. It’s only our intellect which saves us at critical points of life and creativity becomes key tools for success. <br>
That’s actual life. People may not appreciate it but they know it internally. Don’t give your tongue to my voice but the voices of great mind that ever lived.<img style="float:right; margin:5px;" height="150px" width="200px" src="img/junk.jpg" /><br><br>
 
 <b>Problem statement:</b>This event consists of three rounds :<br>
<b>1st Round:</b> This will be a qualifying round. In this round a collection of different electronic components will be provided out of which minimum three components are to be used by the teams to make a working circuit. <br><br>
<b>2nd Round:</b> In this round all the qualifying teams will be provided with the same task. The whole task will be of 35 minutes in which starting 15 minutes will be for thinking about completion of the task and the remaining time will be for the implementation of the circuit. <br><br>
<b>FINAL ROUND:</b> All the teams that have qualified the second round will be shown a video/image. In this video/image, a man is trying to do something you have to figure out what exactly he wants to do. You have to make a working circuit using your intellect & creativity on the basis of observation. First 15 minutes will be for thinking and next 25 minutes will be for implementing the circuit. <br><br>
<b>Rules & Regulations:</b><br>
1.	Students enrolled in any undergraduate program in a recognized institutes are allowed. <br> 
2.	Team strength should not exceed 3.  <br>
3.	All the team members must be from same college.<br> 
4.	In all the rounds the components used shall be provided at the same instant. So participants are NOT allowed to bring their own components. <br>
5.	The teams may be asked to explain the functioning of the circuit in qualifying round.<br>
6.	Only the teams registered till the last date will be considered for the event.  <br>
7.	The judging criteria will be on the basis of intellect & creativity of the participating teams.<br> 
8.	Judges decision will be the final decision.  <br>
9.	Coordinators have authority to change the rule any time during or before the event as required. Any change in the event will be highlighted in advance on our web site.  <br><br>
<b>Event Coordinators:</b><br>
Mr.Ankit Kumar Chaturvedi (final year)         
Mob:+919452779895 <br>
Mr.Priyanshu Mishra (final year)                        
Mob:+919696891370 <br>
Ms.Babita Verma  <br>
Ms.Poonam Gupta <br>       
</p>					
</div>
	<hr >
	</div>
	<!--scroll area end-->
	<div class="col-md-1 back">
	<a href="circuitus.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	<?php $eid='jkd';include_once "reg_inc.php";?>
	</div>
		
		<div class="col-md-1">
		<?php include'social.php'?></div>
</div>  
  


<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script>
 $(".button-fill").hover(function () {
    $(this).children(".button-inside").addClass('full');
}, function() {
  $(this).children(".button-inside").removeClass('full');
});
</script>
</body>
</html>
