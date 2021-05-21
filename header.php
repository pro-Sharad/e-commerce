<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.mobile-container {
  max-width: 480px;
  margin: 0px;
  background-color: #555;
  height: 500px;
  color: white;
  border-radius: 10px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav a.icon {
  float: right;
  color:white;
}

.topnav #myLinks {
  display: none;
  right:auto;
}

.topnav a {
  float: left;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
  
}

.active {
  background-color: #4CAF50;
  color: white;
}
 
</style>
</head>
<body>


<!-- Top Navigation Menu -->

<div class="topnav">
  <a href="index.php" class="active" style="text-decoration:none;">Lifestyle Store</a>
  <div id="myLinks">
    <?php  if (isset($_SESSION['email'])) {                     
?>                     
<a href = "cart.php" style="text-decoration:none; margin-left:50px;"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a>            
<a href = "settings.php" style="text-decoration:none; margin-left:50px;"><span class = "glyphicon glyphicon-user"></span> Settings</a>                     
<a href = "logout.php" style="text-decoration:none; margin-left:50px;"><span class = "glyphicon glyphicon-login"></span> Logout</a>                     
                   
<?php 
 
 } else {  ?>                     
 <a href="signup.php" style="text-decoration:none;"><span class="glyphicon glyphicon-user"></span> Sign Up</a>                     
 <a href="login.php" style="text-decoration:none;"><span class="glyphicon glyphicon-log-in"></span> Login</a>                         
 <?php                     
 } ?>             

  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
	
  }
  var y=document.getElementsByTagName("a");
  x.style.right= "50%";
}
</script>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

</body>
</html>
