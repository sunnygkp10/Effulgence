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

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sign UP</title>
<link rel="shortcut icon" href="../img/anubhuti_logo.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="reg.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script>
function validateForm() {var y = document.forms["form"]["full_name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("College name must be filled out.");return false;}var phoneno = /^\d{10}$/;var c = document.forms["form"]["mobile"].value;if(!c.match(phoneno)){alert("Enter valid mobile number.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<6 || a.length>15){alert("Passwords must be 6 to 15 characters long.");return false;}
var b = document.forms["form"]["confirm_password"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
</head>
<body style="font-family: 'Droid Serif', serif;">
	<h1><font color="white">SIGN UP</font></h1>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
  <form id="regform" name="form" action="signup.php?q=user_profile.php" onsubmit="return validateForm()" method="POST"><br>
  <label for="full_name">Full Name:</label><input class="ip" id="full_name" name="full_name" placeholder="Full Name" type="text"/><br><br>
  <label for="email">Email-Id:</label><input class="ip" id="email" name="email" placeholder="Email" type="text/"><br><br>
  <label for="college">College Name:</label><input class="ip" id="collgename" name="college" placeholder="College Name" type="text"/><br><br>
  <label for="gender">Gender:</label><select class="ip" id="gender" name="gender" style="width: 200px">
  <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
  </select><br><br>
  <label for="mobile">Mobile Number:</label><input class="ip" id="mobile" name="mobile" placeholder="Mobile" type="text"/><br><br>
  <label for="password">Password:</label><input class="ip" id="password" name="password" placeholder="Password" type="password"/><br><br>
  <label for="confirm_password">Confirm Password:</label><input class="ip" id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password"/><br><br>
  <!--<div style="margin-left:180px;width:160px" class="g-recaptcha" data-sitekey="6LcxywATAAAAAA9HIf3UkxbfdEkgNOoZgbpJB8M7"></div>
  <center><font color="red"><?php echo @$_GET['q'];?> </font></center><br>-->
  <input class="btn btn-success" name="Submit" value="SignUp" type="Submit"/>
    </form>
	</div>
  </div>
</body>
</head>