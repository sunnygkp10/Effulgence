<html>
<head>
<title>Stdent Registration Detail</title>
<style>
table,th,td{
 border:1px solid green;
}
 </style>
</head>
<body>
<?php
$event=$_POST["eventlist"];
?>
<table align="center" style="border:1px solid green">
<center><h2>Stdent Registration Detail:<?php echo $event;?></h2><center>
<tr>
<th>S.NO</th>
<th>EFFULGENCE ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>COLLEGE</th>
<th>MOBILE</th>
<th>GENDER</th>
</tr>
<?php
include_once 'dbConnection.php';
$query="SELECT * FROM  `users` WHERE  `u_id` IN (SELECT  `u_id` FROM  `reg` WHERE  `e_id` ='$event')";
$i=1;
if ($result = mysqli_query($con, $query)) {
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$i."</td><td>".$row['u_id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['college']."</td><td>".$row['mobile']."</td><td>".$row['gender']."</td></tr>";
	$i=$i+1;
}
}
else {
	echo "sdfghjk";
}
?>
 </table>
</body>
</html>