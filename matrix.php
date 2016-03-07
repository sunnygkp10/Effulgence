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
	<h3><b>The Matrix</b></h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">


<p>
<b>IGeneral Rules-</b><br />
1.  Each team can have a maximum of 4 participants.<br> 
2.  A team may consist of students from different colleges. <br>
3.  Certificates of Excellence will be awarded to the top three teams. <br>
4.  No damage should be made by a bot to the arena or to other team’s bots during the match any manner. <br>
5.  Bots should not be disassembled until the results are declared. <br>
5.  The organizers reserve the right to change the rules as they deem fit.<br> 
6.  Judges decision will be final.
<br /><br />
<b>Bot Specifications-</b><br><br>
● During the whole event the bot must fit within a square of 20X20X20 (lXbXh). Dimensions in cm.<br>
● The Robot must be stable and able to move on its own. A bot not fulfilling these criteria will be disqualified.<br>
● The bots should be able to follow the line according to event specifications.<br>
● The wire used to power/feed the bot should remain slack at all times.<br>
● Each team has to bring its own power supply for its robots. The voltage difference between any two points on the bot must not exceed 18 volts.<br>
● Teams are advised to use an on-board power supply. In case they are using external power supply they will be responsible for any problem created by entanglement of wires.
<br /><br />
<b>Event Structure-</b><br>
There will be 3 rounds in the whole event.<br><br>
<b>Round 1 (Robo-racing):</b><br>
 The bots will be placed at the black circle and should traverse the arena clock-wise.The bot which reaches earlier to the  next  black circle will qualify for the next round.<br><br>
<img height="350px" width="700px" src="img/matrix.jpg"><br /><br>
Proper combination between accuracy and speed will be the key to win.<br><br>
<b>Round 2:</b><br>
● Bot has to travel the 6*6 grid crossing through each node as shown by colored line.<br>
● The bot which will take minimum time to complete the grid will mark it’s entry to next round.<br><br>
<img height="350px" width="700px" src="img/matrix1.jpg"><br /><br><br>
<b>Round 3 :</b><br>
● In this event the bot has to complete the grid passing through the given node (as shown by red circle) via shortest path from starting to end point .<br>
● The co-ordinate of the node (which may differ for different teams) will be given before the starting of the event.<br><br>
<b>Event Co-ordinators:</b><br>
Shivam Agarwal (9457743300)<br>
Devesh Singh (7785967808)<br>
Harshit Verma(8181831634)<br>
Shraddha Singh<br><br>
<p><b>EVENT DISCRIPTION</b>(<a href="pdf/TheLattice.pdf">Click Here</a>)</p>

</p>


	</div>
	<hr >
	</div>
	<!--scroll area end-->
	<div class="col-md-1 back">
	<a href="robotum.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	<?php $eid='mtx';include_once "reg_inc.php";?>
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
