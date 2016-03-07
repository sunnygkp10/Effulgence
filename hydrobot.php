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
	<h3>MECHANICAL HYDROBOT</h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">


<p>"Those who want to live, let them fight, and those who do not want to fight in this world of eternal struggle                   do not deserve to live."<br><span  style="float:right">-Adolf Hitler </span><br /><img style="float:right; margin:5px;" height="150px" width="200px" src="img/machinamentum4.PNG" /><br><br>
					Deadly duel between robots for honor. Effulgence 2k15 presents “Mechanical Hydrobot” to blow off your steam and apply your                       mechanical creativity in this savage war.<br /><br />
                     <b>Problem statement</b><br>

                     To compare the strength of mechanical hydraulic robot made by mechanical engineering students .The strength of robot is                        measured by organising a fight between them and the robot which overturns its opponent, wins the game. (Only mechanical                        components allowed)<br /><br />

                    <b>Skill Development.</b><br>

                     It enhances the creativity, innovativeness and dedication of students towards the charismatic mechanical engineering and its                        application in robotics.<br /><br /></p>
						<p><b>Event Description</b></br> 1. The base of each Bot must fit within a 10-inch square. This is to prevent students from building sprawling robots that cannot be flipped. </br>2. Weight of whole Bot should not greater than 1 kg.</br> 3. Max height (whole Bot) 30'' with full extension of arm upward.</br> 4. No. of team member 4. </br>5. No extra power should be used which falls outside the mechanical power. </br>6. Any power can be used such as spring power, mechanically operated hammer power etc. </br>7. Use of electric motor and battery is strictly prohibited. </br>8. Side of cubes used is up to 2 cm.</br> 9. Diameter of hole in the holed cube is up to 4mm. Battle Time The arena consists of two 10&quot; squares spaced apart by 2&quot; - 4&quot; drawn onto a table top (depicted in the video). Ideally there should be about 6&quot; between the sides of the squares and the edge of the table.</br> <b>Rules of engagement</b>: </br>1. Bots begin by squarely facing each other with the front of the base touching the edge of the square and the arm completely extended. </br>2. There are three ways to win a fight: flip your opponent, push your opponent off of the table, or if your opponent experiences any failure.</br> 3. A stalemate occurs when the bots are both active but unable to reach one another.</br> 4. A draw occurs if both bots are either flipped or have fallen off.</br> 5. Students cannot touch the Bot with their body during battle.</br> 6. Students must strive to control their Bot with precision.</br> 7. Extra time is provided to the students whose bot suffers any repairable failure, but it lead to the negative point of minus two.</br> 8. There are three fights between the two bots and for each fight points are allocated according to the criteria given below:</br> &bull; When one completely flips its opponent off the table 10 points are allocated to that bot and 0 point to the loser. </br>&bull; After playing some fights if the bot suffers an unrepairable failure then its opponent will win that round and failed bot is out of the fight permanently without any negative points. </br>&bull; During fight if a bot suffers repairable failure then extra time for repairing (not more than 10 minutes) is given with minus two points. </br>&bull; There are no points given for a draw.</br> &bull; More rules are made according to the number of teams. </p>

	</div>
	<hr >
	</div>
	<!--scroll area end-->
	<div class="col-md-1 back">
	<a href="machinamentum.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	<?php $eid='mhb';include_once "reg_inc.php";?>
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