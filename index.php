
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
  <title>Testing Page</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<style>
	#button{ 
	color:#fff;
	background-color:red;
	font-weight:bold;
	border:2px solid red;
	border-radius:2px;
	}
	.banner{
	padding:6%;
	 background-color:rgba(0,0,0,0.7);
	 color:#fff;
	 position:relative;
	 margin-left:18%;
	 margin-right:18%;
	}
	
	#foot{
	
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgba(0,0,0,1);
   color: white;
   text-align: center;
	}
	</style>
  </head>
<body>
<?php
include 'header.php';
?>

<div id="content">

<div id="bgimage">
<div class="container">
<div class="banner">
<h1 style="font-weight:bold;">We Sell Lifestyle</h1>
<p>Flat 40% off on premium brands</p>
<a href="products.php"><button type="button" id="button">Shop Now</button></a>
</div>
</div>
</div>
<br><br><br><br>
<div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="Assignment/2.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="Assignment/12.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="Assignment/118.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
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




