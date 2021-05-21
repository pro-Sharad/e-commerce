<?php
require 'common.php';
if (!isset($_SESSION['email'])) 
{
 header('location: index.php');
}  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Settings Page</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<style>	
.red{
    color:red;
}
.push{
	height:50px;
}
	</style>
</head>
<body>

<?php
include 'header.php';
?>
<br><br><br><br>
<div class="container" style="margin-bottom:-50px;">
<div class="row">
<div class="col-xs-6 col-xs-offset-2">
<h1><b>Change Password</b></h1>
<br>
<form method="post" action="settings_script.php">
<div class="form-group">
<input type="password" name="opassword" class="form-control" placeholder="Old Password" pattern=".{6,}">
</div>

<div class="form-group">
<input type="password" name="npassword" class="form-control" placeholder="New Password" pattern=".{6,}">
</div>

<div class="form-group">
<input type="password" name="rpassword" class="form-control" placeholder="Re-type New Password" pattern=".{6,}">
</div>
<button type="submit" class="btn btn-primary">Change</button>

  <?php if (isset($_GET['error'])){
   echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
  }
  ?>
</form>
</div>
</div>
<div class="push"></div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>