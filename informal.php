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
	<div class="col-md-7">
	<div class="area1">
	<h3>Informal</h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
<p><b>NOTE:</b><br />
There will be onspot registration</p>

<a href="#" class="md-trigger" data-modal="informal1">
  <div class="button-fill grey">
    <div class="button-text">Tug of War</div>
    <div class="button-inside">
      <div class="inside-text">Tug&nbsp;of&nbsp;War</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal2">
  <div class="button-fill grey">
    <div class="button-text">JUST A MINUTE</div>
    <div class="button-inside">
      <div class="inside-text">JUST&nbsp;A&nbsp;MINUTE</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal3">
  <div class="button-fill grey">
    <div class="button-text">Dumbcharades</div>
    <div class="button-inside">
      <div class="inside-text">Dumbcharades</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal4">
  <div class="button-fill grey">
    <div class="button-text">FANTASTIC FOUR</div>
    <div class="button-inside">
      <div class="inside-text">FANTASTIC&nbsp;FOUR</div>
    </div>
  </div>
</a>


<a href="#" class="md-trigger" data-modal="informal5">
  <div class="button-fill grey">
    <div class="button-text">Hunt 'N' Down</div>
    <div class="button-inside">
      <div class="inside-text">Hunt&nbsp;'N'&nbsp;Down</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal6">
  <div class="button-fill grey">
    <div class="button-text">MR&nbsp;AND&nbsp;MS.&nbsp;EFFULGENCE</div>
    <div class="button-inside">
      <div class="inside-text">MR&nbsp;AND&nbsp;MS.&nbsp;EFFULGENCE</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal7">
  <div class="button-fill grey">
    <div class="button-text">Letters To Juliet </div>
    <div class="button-inside">
      <div class="inside-text">Letters&nbsp;To&nbsp;Juliet </div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal8">
  <div class="button-fill grey">
    <div class="button-text">Frippery</div>
    <div class="button-inside">
      <div class="inside-text">Frippery</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal9">
  <div class="button-fill grey">
    <div class="button-text">Push in rush</div>
    <div class="button-inside">
      <div class="inside-text">Push&nbsp;in&nbsp;rush</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal10">
  <div class="button-fill grey">
    <div class="button-text">”share” NO “chair”</div>
    <div class="button-inside">
      <div class="inside-text">”share”&nbsp;NO&nbsp;“chair”</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal11">
  <div class="button-fill grey">
    <div class="button-text">AD MAD</div>
    <div class="button-inside">
      <div class="inside-text">AD&nbsp;MAD</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal12">
  <div class="button-fill grey">
    <div class="button-text">Arm wrestling</div>
    <div class="button-inside">
      <div class="inside-text">Arm&nbsp;wrestling</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal13">
  <div class="button-fill grey">
    <div class="button-text">Hum saath-saath hai </div>
    <div class="button-inside">
      <div class="inside-text">Hum&nbsp;saath-saath&nbsp;hai</div>
    </div>
  </div>
</a>

<a href="#" class="md-trigger" data-modal="informal14">
  <div class="button-fill grey">
    <div class="button-text">Entertainment Quiz</div>
    <div class="button-inside">
      <div class="inside-text">Entertainment&nbsp;Quiz</div>
    </div>
  </div>
</a>


	
	</div><hr>
	<!--scroll area end-->
	</div>
	<div class="col-md-1 back">
	<a href="events.php"><button class="sunny">Back</button></a>
	<a href="index.php"><button class="sunny">Home</button></a>
	</div>
		
		<div class="col-md-1">
		<?php include'social.php'?></div> 
 </div>
<!--============================================================================================================================================-->
	<div class="md-modal md-effect-8" id="informal1">
			<div class="md-content">
				<h3>Tug of War</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p>The age-old sport, a tussle for supremacy, is not only a test of sheer strength but also of your grit and determination. This                    team game involves coordination and requires resilience and perseverance to bring home the bacon.<br><br>
                   So get ready for a highly entertaining and a severe contest that has on display raw power, unflagging spirit and undefiable                  resolution…
                   </p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal2">
			<div class="md-content">
				<h3>JUST A MINUTE</h3>
				<div class=" area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p>Are you a chatter-box.?<br><br>
                      …………….Do you speak non-stop?<br><br>
                     First time ever your senseless words can help you win attractive prizes.
                     No hesitations. No deviations. JAM along as topics get unfathomable(e.g. ‘a pig in the sty’, ‘astounding spies’, etc)…buzzers go                     wild and that mic-whipping jam-master permits you to react in Just A Minute! We brings to you the side splitting, completely                     spellbinding JAM event 
                     </p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal3">
			<div class="md-content" >
				<h3>Dumbcharades</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p>It has been said that in the land of the dumb, the man with a voice will be king. It is now time to prove them wrong. Finally it                     is the silence that does the talking…<br><br>
                    Dumb charades is a game of communicating through actions, of articulating in silence for ‘actions speak louder than words…
                    </p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal4">
			<div class="md-content">
				<h3>FANTASTIC FOUR</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p>Teams should have  4 members. Each team be given 4 tasks(team can divide the members accordingly …taskwise)</p>
                    <ul>
					  <li>1. A task which is to be performed in given time</li>
                      <li>2. quiz</li>
                      <li>3. A whacky business idea.</li>
                      <li>4. A cartoon strip making (theme will be given during the event).</li>
					 </ul><br><br>
                       Each team will have 35 minutes to complete all the activities. You would be judged on their time management, delegation,                       completion of tasks within slotted time and quality of work.
                     </p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal5">
			<div class="md-content">
				<h3>Hunt 'N' Down</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p>Participants will be given some clues , by solving the clue they will be awarded points.<br><br> Winners of first round will                       qualify for the final round. Team with the maximum points will win</p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal6">
			<div class="md-content">
				<h3>MR AND MS. EFFULGENCE</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p><b>“Fashions fade, style is eternal”</b><br />-a platform for all the students to flaunt their style and talent…. Mr and Ms                     Effulgence is the contest to find the ultimate festival entertainer. It looks for talent, originality and sense of humour. The                     winners are crowned reigning king and queen of the festival<br><br>
                     <b>Round 1</b>-talent round<br>
                     <b>Round 2</b>-questioning round by judging panel
                    </p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal7">
			<div class="md-content">
				<h3>Letters To Juliet </h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p>Here we provide you an amazing idea for your expressions? Extend a hand for friendship, apologize for your blunders, express                      your feelings and make many other confessions that you want to make to any girl or boy through your own letters.</p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal8">
			<div class="md-content">
				<h3>Frippery</h3>
				<div class=" area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p>Apparel making contest. Each team consists of two members. They shall be provided with some newspapers and other stuff, with                     which they have to design apparel.</p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal9">
			<div class="md-content">
				<h3>Push in rush</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p><b>“hey guys its time for you to really show up ur strength”….</b><br />A push up competition between guys to know how strong                    they are .</p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
<div class="md-modal md-effect-8" id="informal10">
			<div class="md-content" >
				<h3>”share” NO “chair”</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p><b>requires</b><br>
                    At least 4 people, but more people make for more fun.The no. of registering contestants will decide the total participants<br><br>
	                <b>game play</b><br>
                    Arrange a circle of chairs numbering one less than the number of players participating in the game. Players line up outside the                    ring of chairs while one non-player is in charge of playing music — recorded music is easier, but if there are any musicians in the                    group, have them play their instruments. When the music begins, the players move, shake, and shimmy in a circle around the chairs,                    but as soon as the music stops, the players must immediately find a chair. One player will not find a seat and is thus eliminated,                    and one chair is removed from the circle for the next round. The game continues until one player remains. 
                    </p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal11">
			<div class="md-content">
				<h3>AD MAD</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p>Bring out the creativity inside you and make an outstanding advertisement of your own. Be it hilarious or sensitive, be it just                    your creativity and ad sense.<br>
					<ul>
                    <li>• It is a team event. Each team should have 4-5 members only.</li>
                    <li>• Topics would be provided on the spot.</li>
                    <li>• 5 minutes preparation time for each team.</li>
                    <li>• Time limit for the performing the advertisement is 1-2 minutes.</li>
                    <li>• Participants shall be judged on the basis of spontaneity, content, adherence to the topic, on-stage presentation,                          coordination and overall appeal of the advertisement.</li>
                     <li>• The caution should be taken to refrain from displaying obscenity, violence, prejudice, defamation etc. in Advertisement.</li>
                     <li>• Decision of the judges will be final and binding</li>
                     </p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal12">
			<div class="md-content">
				<h3>Arm wrestling</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<ul>
					   <li>• The shoulder of both players must be in a square position before the match starts.</li>
                       <li>• All starts will be a 'Ready.....Go' . The cadence will vary.</li>
                       <li>• You must start with at least one foot on the ground. After the "go" you may have both feet off the ground.</li>
                       <li>• A pin cannot be made if the elbow is out of the pocket.</li>
                       <li>• To make a winning pin you must touch your opponent to the touch pad.</li>
                       <li>• A false start is a foul.</li>
                       <li>• You will forfeit the match with your third foul.</li>
                       <li>• You may not, at any time, touch your body to your hand.</li>
                       <li>• Intentional slip-outs are fouls, which occur when both your palm completely loses contact with your competitor's palm.</li>
                       <li>• The competitors will always conduct themselves in a sportsperson-like manner while at the tournament.</li>
                       <li>• The most important arm wrestling rule is the referee’s decision is final.</li>
                     </ul>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal13">
			<div class="md-content">
				<h3>Hum saath-saath hai (Race)</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p>In this game we tie the opposite legs of partners and the ones who crosses the finish line first wins the race.</p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<div class="md-modal md-effect-8" id="informal14">
			<div class="md-content">
				<h3> Cine Blitz - Entertainment Quiz</h3>
				<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
					<p><b>“Rishtey me to hum tumhare baap lagte hai”….</b><br />but do u really know the rishta???.....its time for all the bollywood                       maniacs to prove their love and obsession to bollywood.Its a quick quiz where we are going to have a two rounds with each                       winning team being qualified to next round.(The team will have two participants) .<br><br>
                       <b>Round 1</b>-bollywod questions<br>
                       <b>Round 2</b>-funtakshiri
                     </p>
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>

<!--===============================================================================================================================================-->
<div class="md-overlay"></div>
<!--partical.js end-->
<script src="js/modernizr.custom.js"></script>
<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
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