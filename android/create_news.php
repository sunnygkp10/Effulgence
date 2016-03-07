<?php
include_once "../dbConnection.php";
$text=$_GET["news"];
echo $text;
mysqli_query ($con, "INSERT INTO news VALUES (NOW(), '$text')")or die("Error");
echo "<h1>News Submitted</h1><br><a href='portal.html'>Go Back</a>";
?>
