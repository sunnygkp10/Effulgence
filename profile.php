<?php
include_once 'session_inc.php';
include_once 'dbConnection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>    
<link href="main.css" rel="stylesheet" type="text/css"/>
<title>User Profile | EFFULGENCE | Tech Fest KNIT Sultanpur </title>
<link rel="shortcut icon" href="../img/anubhuti_logo.png" type="image/x-icon"/>
<style>
table,th,td{
 border:1px solid green;
}
.custom {
    width: 250px;
}
</style>
</head>
<body style="background-image:url('profile1.jpg'); background-repeat:no-repeat; color:white; font-family: 'Droid Serif', serif;">
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
<div class="row"> 
<div class="col-md-3"><br><br>
<a href="changepass.php" width="30px;" class="btn btn-success custom">Change Password</a><br><br>
<a href="../index.php" width="30px;" class="btn btn-info custom">Home</a><br><br>
<?php
if((isset($_SESSION['u_id']))){
	echo '<form action="logout.php" method="post">
			<input type="submit"  width="30px;" class="btn btn-danger custom" value="Logout"/>
			</form>';
}
?><br>
<a href="evnt-overview.pdf" width="30px;" class="btn btn-primary custom">Event Overview</a><br><br>
</div>   
<div class="col-md-6">
<div>
<h2>PROFILE</h2>
</div>
<div><label>User ID : </label>&nbsp;<?php echo $uid; ?><br></div>
<div><label>E-mail address : </label>&nbsp;<?php echo $email; ?><br></div>
<div><label>Name :&emsp;</label><?php echo $full_name; ?><br></div>
<div><label>Gender :&emsp;</label><?php echo $gender; ?><br></div>
<div><label>College Name:&emsp;</label><?php echo $college;?><br></div>
<div><label>Mobile Number:&emsp;</label><?php echo $mobile;?><br></div>
</div>
<div class="col-md-3"></div> 
</div>
<div class="col-md-3"></div> 
</div><div class="col-md-6"></div>
<h2>REGISTERED FOR</h2>
<?php
$query2 = mysqli_query($con,"SELECT DISTINCT(e_super) FROM events WHERE e_id IN (SELECT e_id FROM reg WHERE u_id='$uid')") or die ('Error');
	while($row = mysqli_fetch_array($query2)) {
	$esuper=$row['e_super'];
	echo "<h3>".$esuper."</h3>";
		$query3 = mysqli_query($con,"SELECT e_name FROM events WHERE e_id IN (SELECT e_id FROM reg WHERE u_id='$uid') AND e_super='$esuper'") or die ('Error');
		while($row = mysqli_fetch_array($query3)) {
			echo "<h5>".$row['e_name']."</h5>";
		}
	}
 ?>
 <div>
<div class="col-md-3"></div> 
</div>
</body>
</html>