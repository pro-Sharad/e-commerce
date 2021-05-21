<?php
require 'common.php';
if (isset($_SESSION['email'])) 
{
 header('location: products.php'); 
}  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	 .panel-heading{
	 padding:15px;
	 font-size:30px;
	 }
	 
	 .panel-footer{
	 padding:20px;
	 font-size:20px;
	 }	 
	 </style>
</head>
<body>

<?php
include 'header.php';
?>
<br><br><br><br>
<div class="container">
<div class="row row-style">
<div class="col-xs-6 col-xs-offset-2">
<div class="panel panel-primary" style="margin-top:-50px; width:130%;">
<div class="panel-heading">LOGIN</div>
<div class="panel-body">
<i>Login to make a purchase</i>
<br><br>
<form method="post" action="login_submit.php">
<div class="form-group">
<input type="email" name="email" placeholder="Email" class="form-control">
</div>

<div class="form-group">
<input type="password" name="password" placeholder="Password" class="form-control">
</div>
<button type="submit" class="btn btn-primary" name="submit">Login</button>
<?php if (isset($_GET['error'])){
		echo $_GET['error'];
} ?>
</form>
</div>
<br><br><br>
<div class="panel-footer">
Don't have an account?<a href="signup.php">Register</a>
</div>
</div>
</div>
</div>
</div>
</div>

  <?php include 'footer.php'; ?>
</body>
</html>
