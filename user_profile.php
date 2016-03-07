<?php
include_once 'session_inc.php';
include_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>EFFULGENCE'15 | USER PROFILE</title> 
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
  if(!(isset($_SESSION['u_id']))){

echo '<a href="registers.php"><button class="sunny" style="float:right">signup</button></a>';
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
	<div class=" col-md-2">
	
	</div>

	<div class="col-md-7">
	<div class="area1">
	<h3 style="text-align:center;">Profile</h3>
	</div>
	<!--scoll area start-->
	<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	
<?php
$uid = $_SESSION['u_id'];
$email = '';
$full_name='';
$college='';
$gender='';
$mobile='';
$password='';
if(!(isset($_SESSION['u_id'])))
header("location:index.html");
else {
$query1 = mysqli_query($con,"SELECT * FROM users WHERE u_id='$uid'") or die ('Error');
	while($row = mysqli_fetch_array($query1)) {
	$full_name = $row['name'];
	$college = $row['college'];
	$gender = $row['gender'];
	$mobile = $row['mobile'];
	$email = $row['email'];
	}
}
?>
<?php if(@$_GET['q1']) {echo'<p style="color:#99bc32"><img src="img/tick.png">'.@$_GET['q1'];} ?>
<div class="col-md-6">
<p style="font-family:'batman';">
<b>User ID :</b><br><br />
<b>E-mail address :</b><br><br>
<b>Name :</b><br><br>
<b>Gender :</b><br><br>
<b>College Name:</b><br><br>
<b>Mobile Number:</b><br><br>
</p>
</div>
<div class="col-md-6">
<p style="font-family:'batman'"><span style="color:#FF0000;font-family:'batman';"><b><?php echo $uid; ?></b></span><br /><br />
<?php echo '<span style="font-family:Arial">'. $email.'</span>'; ?><br /><br />
<?php echo $full_name; ?><br /><br />
<?php echo $gender; ?><br /><br />
<?php echo $college;?><br /><br />
<?php echo $mobile;?><br /><br /></p>
</div>
<center><h3 class="reg">REGISTERED FOR:</h3></center>
<?php
$query2 = mysqli_query($con,"SELECT DISTINCT(e_super) FROM events WHERE e_id IN (SELECT e_id FROM reg WHERE u_id='$uid')") or die ('Error');
	while($row = mysqli_fetch_array($query2)) {
	$esuper=$row['e_super'];
	echo "<h4 class='reg' >".$esuper."</h4>";
	   echo "<pre>";
		$query3 = mysqli_query($con,"SELECT e_name,e_id FROM events WHERE e_id IN (SELECT e_id FROM reg WHERE u_id='$uid') AND e_super='$esuper'") or die ('Error');
		while($row = mysqli_fetch_array($query3)) {
		     $eid=$row['e_id'];
			echo "<center><h5 class='reg'>".$row['e_name']; $query4=mysqli_query($con,"SELECT t_id FROM reg WHERE e_id='$eid' AND u_id='$uid'") or die ('ERROR');while($row1 = mysqli_fetch_array($query4)) { echo " [ Team ID : ".$row1['t_id']." ]<br>";}echo "</h5></center>";
		}
		echo "</pre>";
	}
 ?>



</div></div>
</div><hr>
	<!--scroll area end-->
	</div>
	<div class="col-md-1 back">
	<a href="index.php"><button class="sunny pro">Home</button></a>
	<a href="changepass.php"><button class="sunny pro">Change Password</button></a>
<!--	<a href="evnt-overview.pdf"><button class="sunny pro">Event Overview</button></a>
-->
        <a href="http://www.ticketinvert.com/events/Event.php?eventid=25145"><button class="sunny pro" style="font-size:12px">Event Fees Submission</button></a>
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

