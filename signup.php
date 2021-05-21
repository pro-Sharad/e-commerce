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
  <title>Signup Page</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

<?php
include 'header.php';
?>

<br><br><br><br>

<div class="container">
<div class="row">
<div class="col-xs-6 col-xs-offset-2" style="margin-top:-60px;">
<h1>SIGN UP</h1>

<form method="post" action="signup_script.php">

<div class="form-group">
<input type="text" name="name" placeholder="Name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
</div>
<div class="form-group">
<input type="email" name="email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
<?php if (isset($_GET['m1'])){ 
echo $_GET['m1']; 
}?>

</div>

<div class="form-group">
<input type="password" name="password" placeholder="Password" class="form-control" pattern=".{6,}">

</div>

<div class="form-group">
<input type="number" name="contact" placeholder="Contact" class="form-control" pattern=".{10,}">
<?php if (isset($_GET['m2'])){ 
echo $_GET['m2']; 
}?>

</div>

<div class="form-group">
<input type="text" name="city" placeholder="City" class="form-control">
</div>

<div class="form-group">
<input type="text" name="address" placeholder="Address" class="form-control">
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>
</div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>