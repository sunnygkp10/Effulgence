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
	<h3><b>The Great Marketing Mania</b></h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">


<p><b>Introduction</b></p>
<p>No great marketing decision have ever been made on quantitative data-john sculley</p> 
<p>marketing in layman's term is a way of selling yourself, your products and services at maximum profit, enterprises across the globe market themselves, their products and services, but only few are great, and some are good, few  ruled the roost in the past, then bunked, some  made a comeback and rest of them are just lost, what makes only few  great, and some of them good, why some  made a comeback and rest never seemed to try, the answer is simple, the one that markets best is great, the one that does it better is good, the one that improved made comeback, and the one that didn't is lost, and it is rightly said greatness belong to a  legend  and goodness to a person, not to some form of  a data or an equation, jobs at apple, sold passion with his phones, knight at Nike, sold glory with his shoes, so do you think, you are as gritty as they were, do you have an idea, and want to see it in action , we at effulgence bring you the never before in life chance of seeing your ideas in action , in a real enterprise, so come and see it happen as it unfolds.<br /><br />
"Don't let the action waiting"<br /><br />
Structure-<br /><br />
ROUND-1    ONLINE ROUND<br /><br />
 <b>To do</b><br />                                          Once you are registered, a case study analysis problem and the format of solution will be mailed to your 
                                                     email id.
                                         Write the case study analysis, and send the case at effulgence2k15@gmail.com.<br /><br />
<b>Evaluation Criteria-</b><br />          The proposed solution will be evaluated on the basis of analysis with regard to underlying key problems,     why do they exist, their impact on the organization and uncovering possible solutions based on supporting evidence, pros and cons and feasibility of the proposed solution.<br /><br />       
<b>Elimination: </b> <br />                    yes
Next Round Shortlist      four teams
<b>Round 2 </b><br />                       on campus round
                                            On their arrival, the selected teams will be given a case based on the problems of an enterprise from 
<b>To do</b>                          the city of sultanpur.<br /><br />
                                         The teams will have to prepare the solution by doing the required research work; it may include the use of    
                                           Conventional resources like internet or site visits, interviews etc.<br /><br />                        
<b>Evaluation Criteria</b><br />     innovative ideas
                                          Depth of analysis & feasibility of the recommended strategy                                             
To be presented        a 6 to 9 slide ppt along with the pdf copy of the proposed solution 
<br /><br />
*For final evaluation cumulative scores of Round 1 & 2 will be considered
<br /><br />
<b>Rules and guidelines</b><br />

1)number of participants per team is three
<br /><br />2)A student cannot be part of more than one team
<br /><br />3)multiple teams allowed from a college
<br /><br />4)the decision of organizers and judges will be final and binding on the teams.<br><br>
<b>NOTE:</b><br>
●Last date for abstract submission - 24 th of March.<br>
● Results will be declared on 25 th of March.<br>
● Submit your abstraction in pdf format at <a href="#">effulgencefest2015@gmail.com</a><br><br>
</p>
	</div>
	<hr >
	</div>
	<!--scroll area end-->
	<div class="col-md-1 back">
	<a href="negotium.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	<?php $eid='gmm';include_once "reg_inc.php";?>
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
