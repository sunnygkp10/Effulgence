<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>EFFULGENCE'15 | LOGIN</title> 
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
<script>
function validateForm() {
    var a = document.forms["form"]["newpass"].value;
    if(a == null || a == ""){
        alert("Password must be filled out");
        return false;
    }
    if(a.length<6 || a.length>15){
        alert("Passwords must be 6 to 15 characters long.");
		return false;
        }
    var b = document.forms["form"]["confirmpass"].value;
    if (a!=b){
        alert("Passwords must match.");
        return false;
    }
}
</script>

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
	<h3 style="text-align:center;">Change Password</h3>
	</div>
	<!--scoll area start-->
	<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
<form  name="form" action="updatepass.php" onSubmit="return validateForm()"  accept-charset="UTF-8" method="post"  enctype="multipart/form-data">
<?php

?>
<span class="log1"> <label>Old Password:</label></span><br><br>
 <input class="log2" type="password" maxlength="128" name="oldpass" id="oldpass" size="60" />
<br><br>
 <span class="log1"><label>New Password:</label></span><br><br>
<input class="log2" type="password" maxlength="128" name="newpass" id="newpass" size="60" />
<br><br>
 <span class="log1"><label>Confirm Password:</label></span><br><br>
 <input class="log2" type="password" maxlength="128" name="confirmpass" id="confirmpass" size="60"/>
<br><br>
<input class="log2" type="submit" name="op" id="edit-submit" value="Update"/>
</form>
</div></div></div><hr>
	<!--scroll area end-->
	</div>
	<div class="col-md-1 back">
	<a href="index.php"><button class="sunny">Home</button></a>
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
