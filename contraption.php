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
	<h3>CONTRAPTION</h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
<center><p>Creative thinking is not a talent, it is a skill that can be learnt.</p></center>
<img height="150px" width="200px" style="float:right; margin:5px;" src="img/contra.JPG" />
<p>A contraption, invention, device or apparatus is a deliberately over-engineered or overdone arrangement to perform a very simple task in a very complicated fashion, usually including a chain reaction.</p> 
<br /><br />
<p><b>PROBLEM STATEMENT</b><br />
1.	To fill an empty glass with water<br />.
2.	To strike the ball with stick and put it in a glass in a way as in snooker.<br />
3.	To blow off the candle<br /><br />

<b>First round:</b><br /> Each team has to submit a flowchart containing the step by step description of the machine. The flowchart should also contain the description (including part drawing) of every part that will be used to perform that step. Indicate the parallel processes, if any, clearly in your flowchart and in also mention it in description.<br />
<br />
<b>Second round:</b> In this round, selected teams will present their machines at KNIT Sultanpur during Effulgence 2k15.
<br /><br />
<b>Rules and Regulations:</b><br />
<br /><br />1)	To conduct event in best possible way, we have some rules and regulations for participants, which they have to follow. These are:
<br /><br />
<br /><br />2)	A team should have 4 members.
<br /><br />
3)	The machine must complete the task as described in the challenge. If not, points kept for the same would be deducted.
<br /><br />
4)	The machine must be no larger than 12 ft. x 12 ft. x 8 ft. The support from any of the four walls and the top ceiling is not allowed in any form.<br /><br />

5)	The machine must have a minimum of 15 steps (Multiple steps within one parallel step will be considered as one step only). If the machine has less than 15 steps the respective team would be disqualified from the competition. However, there is no constraint on maximum number of steps.
<br /><br />
6)	Only one member from the team is supposed to explain their machine before the demonstration.
<br /><br />
7)	Each team will have a 15 minute reset time if they opt for more than one run.
<br /><br />
8)	Every team must have a leader. But it is not necessary for the leader to give the presentation or handle the machine during machine run.
<br /><br />
9)	Only one team member is allowed to interact with the machine once the evaluation has begun. This includes resetting the machine during the run. This means that only one person will be allowed inside the arena. However, if the team goes for another run, the restriction of one person inside the arena is exempted until the machine is ready for the other run.
<br /><br />
10)	Any loose/falling/hanging objects must remain within the boundaries of the arena. This includes, but is not limited to, balls, dominoes, drops of water, slivers of balloon, and any other 'small' objects. Steam and other gases are exempt from this rule. However, for the sole purpose of electrical connection wires can be outside the boundaries of the arena.
<br /><br />
11)	Each step in the machine should be considered as transfer or transformation of energy from one action to another. Identical transfers of energy in succession should be considered one step. For e.g., a set of dominos falling into each other should be considered one step. While technically each single domino falling is a single step, stating one hundred steps for hundred dominos is repetitive and against the spirit of Contraption.
<br /><br />
12)	The task should be completed in not more than 4 minutes.
<br /><br />
13)	No hazardous materials or explosives may be used on or within the machine.
<br /><br />
14)	No live animals are allowed in the machine.
<br /><br />
15)	Every team will be given maximum three runs for the completion of the task so that if, in case, a team fails to complete the task in their first run, they can go for second run.
<br /><br />
16)	For every human intervention, points will be deducted.
<br /><br />
17)	If a controller/electronic device is used, each instance of its operation should be clearly stated in the step-by-step description submitted along with the written description.
<br /><br />
18)	Each instance should be considered one step, but please supply detailed information of how the step is being accomplished.
<br /><br />
19)	Let's say a ball is supposed to fall onto a switch and turn on a motor which is run by the controller. If the ball misses the switch, but the controller still starts the motor, the controller is not transferring energy from one step to the next step. It is acting as fail safe so the machine can finish its task and is not in line with definition of a step.
<br /><br />
20)	If the ball hits the switch and the controller starts the motor as it should, the device is merely transferring the energy from one step to another, so this is line with the definition of a step.<br /><br />
21)	Participants will be provided basic stationery items like scissors, thermocol and thermocol cutter, fevicol etc. and hardware items like hammer, screwdriver, kitchen knife, pliers, and nut-bolts if required.<br /><br />

22)	Participants will be allowed to use a 5 pin electrical socket but we expect them to bring their extension cords.
<br /><br /></p><p><b>Download Abstract</b>(<a href="pdf/goldberg.pdf">Click Here</a>)</p>

	</div><hr>
	</div>
	<!--scroll area end-->
	<div class="col-md-1 back">
	<a href="machinamentum.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	<?php $eid='con';include_once "reg_inc.php";?>
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
