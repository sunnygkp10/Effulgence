<?php
session_start();
if(isset($_SESSION['u_id'])){
header("Location: user_profile.php"); /* Redirect browser */
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>EFFULGENCE'15 | REGISTER</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/neon1.png" type="image/x-icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
<link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
  <link rel="stylesheet" href="css/animate.min.css"> 
  <link rel="stylesheet" href="css/form.css">  
  <!-- Preloader --><script type="text/javascript">// <![CDATA[
$(window).load(function() { $("#spinner").fadeOut("slow"); })
// ]]></script>
<script>
function validateForm() {var y = document.forms["form"]["full_name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("College name must be filled out.");return false;}var phoneno = /^\d{10}$/;var c = document.forms["form"]["mobile"].value;if(!c.match(phoneno)){alert("Enter valid mobile number.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<6 || a.length>15){alert("Passwords must be 6 to 15 characters long.");return false;}
var b = document.forms["form"]["confirm_password"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>

<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'>
<script src='https://www.google.com/recaptcha/api.js'></script>
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

echo '<a href="log.php"><button class="sunny" style="float:right">login</button></a>';
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
                            <div class="ca-content active">
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
                </ul>	</div>
	<div class="col-md-7">
	<div class="area1">
	<h3>Register</h3>
	</div>
	<!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
<div class="col-md-2"></div>
<div class="col-md-8">
<center><font color="red"><?php echo @$_GET['q'];?> </font></center>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red">'.@$_GET['q7'];}?>
<form id="regform" name="form" action="signup.php?q=user_profile.php" onSubmit="return validateForm()" method="POST"><br>
  <label for="full_name"><span class="log1">Full Name:</span><br /><br /></label><input class="ip log2" id="full_name" name="full_name" placeholder="Enter full Name" type="text"/><br><br>
  <label for="email"><span class="log1">Email-Id:</span><br><br></label><input class="ip log2" id="email" name="email" placeholder="Enter email-id" type="text/"><br><br>
  <label for="college"><span class="log1">College Name:</span><br><br></label><input class="ip log2" id="collgename" name="college" placeholder="Enter college name" type="text"/><br><br>
  <label for="gender"><span class="log1">Gender:&nbsp;</span></label><select class="ip log2" id="gender" name="gender" style="width: 200px">
  <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
  </select><br><br>
  <label for="mobile"><span class="log1">Mobile Number:</span><br><br></label><input class="ip log2" id="mobile" name="mobile" placeholder="Enter mobile number" type="text"/><br><br>
  <label for="password"><span class="log1">Password:</span><strong><strong></strong></strong></label><input class="ip log2" id="password" name="password" placeholder="Enter password" type="password"/><br><br>
  <label for="confirm_password"><span class="log1">Confirm Password:</span><br><br></label><input class="ip log2" id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password"/><br><br>
  <div style="margin-left:180px;width:160px" class="g-recaptcha" data-sitekey="6LdyLwMTAAAAAOJTdaBcRnj9qd6Rn3mO6Z05fGQu"></div>
  <center><font color="red"><?php echo @$_GET['q'];?> </font></center><br>
  <input class="log2 submit" name="Submit" value="SignUp" type="Submit"/>
    </form>

</div>
	
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
