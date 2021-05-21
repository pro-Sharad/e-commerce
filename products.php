<?php
require 'common.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Products Page</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	 
    .thumbnail{
	margin-bottom:50px;
	}
    
	</style>
</head>
<body>

<?php
include 'header.php';
include 'check-if-added.php';
?>
<br><br><br><br>

<div class="container">
<div class="jumbotron">
<h1>Welcome to our Lifestyle Store!</h1>
We have the best cameras,watches and shirts for you.No need to hunt around we have all in one place.
</div>

<div class="row text-center">
<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/5.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>Cannon EOS</h1>
<p>Price Rs.36000.00</p>
   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>


<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/2.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>Sony DSLR</h1>
<p>Price Rs.40000.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>

<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/112.jpg" alt="Shirt" height="100px" width="300px" class="img-responsive">
<center>
<div class="caption">
<h3>Sony DSLR</h1>
<p>Price Rs.50000.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>

<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/4.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>Olympus DSLR</h1>
<p>Price Rs.80000.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>
</div>


<div class="row">
<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/9.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>Titan Model#301</h1>
<p>Price Rs.13000.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>


<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/10.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>Titan Model#201</h1>
<p>Price Rs.3000.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>

<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/11.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>HMT Milan</h1>
<p>Price Rs.8000.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>

<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/12.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>Faber Luba#111</h1>
<p>Price Rs.10000.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>
</div>


<div class="row">
<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/118.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>H&W</h1>
<p>Price Rs.800.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>


<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/6.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>Luis Phil</h1>
<p>Price Rs.1000.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>

<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/13.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>John Zok</h1>
<p>Price Rs.1500.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>

<div class="col-xs-6 col-sm-3">
<div class="thumbnail">
<img src="Assignment/14.jpg" alt="Shirt">
<center>
<div class="caption">
<h3>Jhalsani</h1>
<p>Price Rs.1300.00</p>

   <?php if (!isset($_SESSION['email'])) { ?>                                 
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
   <?php                             
   } else {                                 
   //We have created a function to check whether this particular product is added to cart or not.                                 
   if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)                                     
	   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
   } else {                                     
   ?>                                     
   <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
   <?php                                 
   }                             
   } ?> 
</div>
</center>
</div>
</div>
</div>

</div>
<br><br><br>
<?php
include 'footer.php';
?>

</body>
</html>	