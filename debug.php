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
	<h3><b>Debugging</b></h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">


	<p><b>Description-</b>
					<br />	In debugging, there will be 3 levels.
<br />	In each level there will be a problem statement with its       solution which contains bugs.
<br />Participant have to find bug and submit real solution.
<br />	There will be fix time to debug each question.
<br />With increase of level, level of difficulty and Time for debugging will be increases.
<br />With each correct question participant will get credits by which participant can buy tools to increase your time for debugging.</li>
<br />As much less time you will take to debug as more marks you will get.<br />So Be Fast Be Accurate Be the Best</li>
<br><br><b> Rules for participating and team formation: </b><br>
1. Each team must have 2 members.<br> 
2. Participants must have a valid registration id of effulgence for participating in competition.<br> <br>
<b>The rules for this event are as following – </b><br>
1. There will be two rounds each having 3 levels. Teams (prelims qualified) will participate in 1st round and 10 qualifying teams will enter to next round. (liable to change) <br>
2. No. of questions and difficulty level will differ otherwise 1st and 2nd rounds are same.  <br>
3. Duration of event will be 1 hr 30 min. <br><br>
<b>Now Description of each round is given below: </b><br>
1. Each level will contain questions from easy level to the most mind boggling levels i.e. the level of difficulty will go on increasing with the increasing levels. <br>
2. For the first round a series of ten questions will be given which will cater the basic concepts of the participant based on just small programming skills. There is no boundation on the language being used in the problem statement. <br>
3. As the quiz progresses there will be time constraint on each and every question which will be of 1 minute for the first round, 2 min for the second and three min for the third. *(time may change) <br>
4. If the participant answers the question in the first 50% of the time allotted to each question then he will be awarded with a special kind of bonus called a CREDIT POINT. <br>
5. If the participant wants to gain another kind of CREDIT POINT on the same question if he/she was not able to obtain the first credit point then he/ she can answer the same question in the 75% of the time allotted to that particular question.  <br>
6. A provision of hint question has also been put for the participants who are not able to answer the question or who are finding the question 
challenging, but this hint question option is only available for the second and the third rounds. <br>
7. At the end of the quiz the team getting the highest score will be declared as the winner and in the case of tie breakers the team obtaining the highest credit points will be adjudicated as the winner. <br>
8. Please note that the CREDIT POINTS obtained by the participant at every level of the quiz will only make him eligible for the next round i.e. the teams with the highest to lowest number of CREDIT points in their respective rounds will be forwarded to the next round.	<br><br>
<b>For queries mail us at <a href="#">chauhanmanish920@gmail.com</a> or contact
Manish Chauhan 9198948734 </a>
</p>


	</div>
	<hr >
	</div>
	<!--scroll area end-->
	<div class="col-md-1 back">
	<a href="software.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	<?php $eid='deb';include_once "reg_inc.php";?>
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
