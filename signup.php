<?php
require_once "recaptchalib.php";
// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = "6LdyLwMTAAAAAOJTdaBcRnj9qd6Rn3mO6Z05fGQu";
$secret = "6LdyLwMTAAAAAAGcCecOECCZPMCA5ZonTQkuEjn1";
// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
$lang = "en";
// The response from reCAPTCHA
$resp = null;
// The error code from reCAPTCHA, if any
$error = null;
$reCaptcha = new ReCaptcha($secret);
// Was there a reCAPTCHA response?
if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($resp != null && $resp->success) {
ob_start();
include_once 'dbConnection.php';
$name = $_POST['full_name'];
$name= ucwords(strtolower($name));
$email = $_POST['email']; 
$college = $_POST['college'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile']; 
$password = $_POST['password'];
$full_name = stripslashes($full_name);
$full_name = addslashes($full_name);
$full_name = ucwords(strtolower($full_name));
$email = stripslashes($email);
$email = addslashes($email);
$college = stripslashes($college);
$college = addslashes($college);
$mobile = stripslashes($mobile);
$mobile = addslashes($mobile);
$password = stripslashes($password); 
$password = addslashes($password); 

//$f=fgets(fopen("u_gen.txt", "r"));
//$count=(int)$f;
//$count++;
$d=date("d");
$h=date("h");
$i=date("i");
$s=date("s");
$count=$d.$h.$i.$s;
$uid="EFF".$count;
//fputs(fopen("u_gen.txt", "w"),$count);

$q3=mysqli_query($con,"INSERT INTO users VALUES  ('$uid', '$name' , '$email' , '$college' , '$gender', '$mobile', '$password')");
if($q3)
{
session_start();
$_SESSION["u_id"] = $uid;
$ref = $_GET['q'];
header("location:$ref");
}
else
{
header("location:registers.php?q7=Email Already Registered!!!");
}
ob_end_flush();
}
else{
header("location:registers.php?q=Captcha Error:We couldn't pull up you are human. Please try again.");
}
?>
