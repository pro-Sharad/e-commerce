<?php
require 'common.php';
if (!isset($_SESSION['email'])) 
{  
 header('location: index.php');
}  

$opassword = $_POST['opassword'];
$npassword = $_POST['npassword'];
$rpassword = $_POST['rpassword'];

$opassword = mysqli_real_escape_string($con, $opassword);
$npassword = mysqli_real_escape_string($con, $npassword);
$rpassword = mysqli_real_escape_string($con, $rpassword);

$opassword = MD5($opassword);
$npassword = MD5($npassword);
$rpassword = MD5($rpassword);

if ($npassword!=$rpassword){
	header('location: settings.php?error=The two passwords don\'t match');
}

$query="SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$table=mysqli_fetch_array($result);
if($table['password']==$opassword){

$query1="UPDATE  users SET password = '" . $npassword . "' WHERE email = '" . $_SESSION['email'] . "'";
$result1=mysqli_query($con,$query1) or die(mysqli_error($con));	
header('location: settings.php?error=Password Updated');
}
else{
	header('location: settings.php?error=Wrong Old Password');
}
?>