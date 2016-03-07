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
	<h3><b>Tempus Ride</b></h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">

<p>
<b>Introduction-</b> "The markets are not created by god. Economic forces or nature but by businessman"<br />
Each firm launches products to succeed, but some of them fail instantly, while some lose their sheen early, some of them stay for a while, but few succeed to leave indelible mark on the people's mind, so, what's the pressure point, what makes people go frenzy for few, and leave others aside, your challenge is to rebrand those many, either from past or from present, or to conceive, altogether a new product, and communicate, and convey your ideas effectively.<br /><br />
<b>Structure-</b><br />

	<br />
<b>ROUND-1</b><br />	"Pearls from the Present & Past"<br /><br />
<b>To do</b><br />	Select a current or past product/service (Provide reasons for the choice made)
Analyse why it failed & what changes can be made
Come up with a new Marketing strategy which also includes communication & Pricing strategy
How much of change will the proposed strategy bring with respect to the awareness, sales, etc., and achieve the goals of the company	
<br /><br /><b>Evaluation Criteria</b><br />	Choice of product/service
How much of a change has been brought
Logical rigour and coherence in rebranding the product
Depth of analysis & feasibility of the recommended strategy	<br /><br />
<b>Elimination:</b>&nbsp;	Yes<br /><br />	
<b>Next Round Shortlist:</b>	6 Teams<br /><br />	
<b>Round 2</b><br />
	"Foot in the future"<br /><br />	
<b>To do</b>	Choose a new to the world product or a non-existent product which could be utilized 10 years down the line. For example: Invisibility Cloak, Driverless cars, flying Cars, Wireless electricity, Mosquito repellent bands and so on.
Come up with a Marketing strategy for the same. Pricing, Design and Communication strategies also to be looked into.	
<b>Evaluation Criteria</b>	Choice of Product/Service
Innovative ideas
Depth of analysis & feasibility of the recommended strategy	
To be presented	A 6 to 9 slide PPT	
		<br /><br />
*For final evaluation cumulative scores of Round 1 & 2 will be considered
<br /><br /><b>Rules and guidelines-</b><br />
<br /><br />1)number of participants in a team is 3
<br /><br />2)A student cannot be part of more than one team
<br /><br />3)multiple teams allowed from a college
<br /><br />4)the decision of organizers and judges will be final and binding on the teams. <br><br>
<b>NOTE:</b><br>
●Last date for abstract submission - 24 th of March.<br>
● Results will be declared on 25 th of March.<br>
● Submit your abstraction in pdf format at <a href="#">effulgencefest2015@gmail.com</a><br><br></p>

	</div>
	<hr >
	</div>
	<!--scroll area end-->
	<div class="col-md-1 back">
	<a href="negotium.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	<?php $eid='trd';include_once "reg_inc.php";?>
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
