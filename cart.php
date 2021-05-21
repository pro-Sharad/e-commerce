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
  <title>Cart Page</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>	
.remove_item_link{
    color:#0000ff;
}
	</style>
</head>
<body>

<?php
include 'header.php';
?>
<br><br><br><br><br><br>
<div class="container">
<div class="table-responsive">
<table class="table table-striped">
 <!--show table only if there are items added in the cart-->
 <?php
   $sum = 0;
   $id=1;
   $user_id = $_SESSION['user_id'];
   $query = "SELECT items.price AS Price, items.id AS id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
   $result = mysqli_query($con, $query)or die($mysqli_error($con));
                       
if (mysqli_num_rows($result) >= 1) {
                            ?>
                        
<thead>
<tr>
<th> Item Number</th>
<th>Item Name</th>
<th>Price</th>
<th> </th>
</tr>
</thead>
<tbody>
<?php
while ($row = mysqli_fetch_array($result)) {
$sum+= $row["Price"];
$id .= $row["id"] . ", ";
echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
  }
  
	
$id = rtrim($id, ", ");
 echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
   ?>
</tbody>
<?php
   } else {
   echo "Add items to the cart first!";
    }
 ?>
<?php
?></table>

</div>
</div>
<?php
include 'footer.php';
?>

</body>
</html>