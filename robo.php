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
	<h3>Robo gp</h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">


                                            <center><p><b>More speed, more power with minimum time</b></p></center> <br>
<p><b>Design a wired/wireless bot that is capable of completing the ALL TERRAIN Arena successfully in minimum time.</b> <br />
 <img src="img/moto.jpg" /><br />
<b>Track </b><br />
1. Track surface and course may have unevenness.<br /><br /> 
2. There might be abrupt angles. <br /><br />
3. There will be certain obstacles in race track which will try to slow down the speed of the bot ex. Road cones.<br /><br /> 
4. Arena will consist of switch gate, speed breakers, marble/sand pits, slippery paths, rotating disc, see-saw, slotted ramp etc.<br /><br /> 
5. The track will have a certain number of checkpoints. <br /><br />
6. Actual track will be revealed later. <br /><br /><br>
<b>ARENA</b><br>
 <img height="350px" width="700px" src="img/urban.jpg"></br><br>
<b>Bot Specifications:</b>   
<br />
<b>Dimensions and Weight:</b><br />
1.	The bot should not be more than 30cm*30cm*35cm (length*breadth*height) in size at any time during gameplay.<br /><br />
2.	The bot can be wired or wireless<br /><br />
3.	If the bot is wired then the wire should be at least 5 meter long & wire should remain slack under all circumstances during the competition. All the wires coming out of bot should be stacked as single unit. The wires must be properly insulated. <br /><br />
4.	The maximum allowed weight for wired bot is 4kg and that for wireless bot is 5kg.<br /><br />
5.	Use of IC engine is strictly prohibited. <br /><br />
<b>Batteries and Power </b><br /><br />
1.	Teams can have batteries to power their bot.<br /><br />
2.	The battery will be taken into consideration for the measurement to be made for the bot dimension and the weight.<br /><br />
3.	The only permitted batteries are ones that cannot spill or spray any of their contents when damaged or inverted.<br /><br />
4.	In case you are not using battery then 230V, 50 Hz ac supply will be provided.<br /><br />
5.	The potential difference between any two points of the bot should not exceed 24V dc.<br /><br />

<b>Rules:</b><br />
1.	Each team must have 4 participants.<br /><br />
2.	A team may consist of students from different colleges.<br /><br />
3.	Each team member must have identity card of their respected institute.<br /><br />
4.	Teams will be selected on the basis of the abstract submitted. <br /><br />
5.	Every team will be given only one chance to run their bot on the track. <br /><br />
6.	Timer will start when bot starts from the starting point.<br /><br />
7.	There will be a penalty if the bot touches any obstacle or the boundary of the track.<br /><br /> 
8.	There will be partial points based on the length covered, checkpoints cleared. <br /><br />
9.	The bot will be judged on basis of (in priority):- <br /><br />
               a. Time to complete the track. <br /><br />
               b. Number of checkpoints cleared. <br /><br />
10.	Referee's decision will be final and binding to all.<br /><br />
11.	Team members will be allowed only three times to touch or reset their robots position during the run. However, this will lead to a time penalty and timer will not stop during this course of action. <br /><br />
12.	If the teams reset their robots position then they will have to start from the last checkpoint cleared. <br /><br />
13.	Teams have to show their bots prior to their match for technical checking of bot.<br /><br />
14.	No major changes in the mechanical system etc. would be allowed after their technical checking.<br /><br />
15.	Unethical behaviour could lead to disqualification. Faculty-coordinators have all the rights to take final decision for any matter during the event.<br /><br />
16.	The organizers reserve the right to change the rules as they deem fit.<br /><br /> 
17.	Rules for Penalties and Bonus points will be explained on the day of the event.<br /><br />
18.	Change in rules if any will be notified to the registered participants.<br /><br />
19.	Any team that is not ready at the specified time shall be disqualified automatically.<br /><br />
20.	If the bot is found unsafe to run on the track, that team will be disqualified from the race<br /><br />
</p>

	</div><hr>
	</div>
	<!--scroll area end-->
	<div class="col-md-1 back">
	<a href="robotum.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	<?php $eid='rgp';include_once "reg_inc.php";?>
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
