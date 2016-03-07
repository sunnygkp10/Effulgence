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
	<h3>MINE HUNTER</h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">


<p>Arnold is a soldier who is in serious war trouble. He was left alone while marching to his army camp lost his way. After some time of analyzing he found a way to camp. But here lies a serious problem; enemies have planted mines throughout the road. In order to reach the camp, the mines need to be defused. He has no knowledge of defusing mines. How will he do that??? He needs your help to meet his army fellows. Can you help him???? <br /><br>
<b>DESCRIPTION: </b><br>In this event you have to make an autonomous robot which will travel the arena and will defuse the mines.<br> The robot should follow the path and upon reaching on a mine  he should wait there for defusing and give indication of defusal  by glowing LED.<br><br>
<b>GENERAL RULES:</b><br>
1. The team should consist of a maximum 4 players. The members could be of same or different colleges.<br>
2. The BOT dimension are 25*25*25 c.m. The dimensions should not exceed the mentioned dimensions any time during the event.<br>
3.Only a.c. power supply will be provided to teams. They have bring their own d.c. regulators. <br>
4.In the circuit the voltage should not exceed 24 Volts.<br>
5.The bots should not use any measure that could harm the arena.<br>
6.The judges have the right to change the rules anytime during the event.<br>
7.In case of any dispute or issue, the event coordinators have the final authority.<br><br>
<b>EVENT STRUCTURE:</b>  The event will be divided in two phases: Prelims and Mains.<br><br>
<b>PRELIMS:</b> In this round the Bot has to start from the START point and travel the whole arena. While defusing as many as mine and covering  all the junctions , it has to reach the END point and should stop there.
1. START will be starting point and End is the terminating point.<br>
2. It should cover all the junctions.<br>
3. Upon reaching a mine, the bot should stop and wait there and glow a LED  and then proceed further.<br>
4. For every mine the bot defuses ,10 points will be awarded.<br>
5. For every junction it crosses 5 points will be awarded.<br>
6. 20 additional points will be  awarded to those who successfully covers whole arena.<br>
7. There is no time bondage, but in case of tie, Time spent in performing the task will be deciding factor.<br><br>
<b>ARENA SPECIFICATIONS:</b> The arena will be a 6*6 grid. The background will be white ,on which the whole arena will be drawn by black strip of 3 c.m.<br> The mines will be of  triangular shape and of sky blue colour. Detailed description can found by the image below:<br> 
<img height="350px" width="800px"src="img/mine.png"><br />
<b>FINAL ROUND: </b> The team which qualifies through prelims will compete in the finals.In the final round bot has to start from BEGIN point and by choosing one the three paths it has to reach the END.<br><br>
<b>Rules:</b><br>
1. The arena will consist of three paths with three different types of obstacles.<br>
2. First path will consist of two different type of mines; second path will consist of elevations and third path will have some zig zag or curves. The actual no. of obstacles and mines can vary.<br>
3. The actual arena will be disclosed 2-3 hours before the finals.<br>
4.You have to choose which is the  most suitable path and do your programming according to it.<br><br>
<b>Points:</b><br>
1. Points will awarded for defusing mines and the time you take to complete the task.<br>
2. No special points will be awarded for choosing any certain path.<br><br>
<b>ARENA :</b>Sample arena is being shown in the picture below:<br><br>
<img height="350px" width="800px" src="img/minef.png"><br /><br>
<b>EVENT CO-ORDINATORS:</b><br>
1.Akshaya Ambedkar (Mob:8808972234)<br>
2.Anshul Gupta (Mob:9808354220)<br>
3.Tarun Bhardwaj (Mob:8181900497)<br>
4.Shewta Chaudhary<br>
</p>
	</div>
	<hr>
	</div>
	<!--scroll area end-->
	<div class="col-md-1 back">
	<a href="robotum.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	<?php $eid='mhr';include_once "reg_inc.php";?>
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