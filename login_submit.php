<?php
require 'common.php';

if (isset($_POST['submit'])) {
$email = $_POST['email'];
$password = $_POST['password'];
$email = mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con,$password);
$password = MD5($password);

$query="SELECT id,email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$submit = mysqli_query($con, $query) or die(mysqli_error($con));
$rows=mysqli_num_rows($submit); 

if ($rows == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($submit);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');
}
}
