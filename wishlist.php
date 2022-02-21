<?php
session_start();

include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
	$lvl=$_SESSION["Lvl"];
	$label="Hello ".$username."!";
} else {
	$label="SIGN IN";
}
$username=$_SESSION["Username"]; 
$sql="SELECT p.ProductID, p.Name, p.Price, c.Username, p.Description, p.Img FROM products p,wishlist c WHERE p.ProductID=c.ProductID";

$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="productsstyle.css">
<meta name="viewport" content="width=device-width", initial-scale=1.0">

</head>

<body>
<!--div element for all other elements on the page-->
<div class="wrapper">
<!--header div tag-->

	<div class="header">
	<span class="lg-view"><a href="index.php" style="text-decoration:none; color:black;">PcMegaStore</a></span>
	<span class="sm-view"><a href="index.php" style="text-decoration:none; color:black;">PC</a></span>	<!--Store logo-->
		<div class="iconcon">
		<a href="cart.php"><img id="icon" src="Images/cart.png" alt="ShoppingCart"><!--basket icon-->
		<a href="cart.php" style="text-decoration:none; color:black;">CART</a><!--basket icon-->
		</div>
		
		<div class="iconcon">
		<a href="registration.php"><img id="icon" src="Images/user.png" alt="ShoppingCart"></a>
		<a href="registration.php" style="text-decoration:none; color:black;"><?php echo $label ?></a><!--sign in icon-->
		</div>
	</div>
<!--middle,content div tag with img and details of a product-->
	<div class="navtop">
		<ul class="topnav">		<!--nav bar-->
		<li><a href="index.php">Home</a></li>
		<li><a href="products.php">products</a></li>
		<li><a href="slideshow.html">Gallery</a></li>
		<li><a href="report.html" >Report</a></li>
		</ul>
	</div>
	<div class="col">
<?php 

		while($row=mysqli_fetch_assoc($result)){
			
		echo "<div class='card'>" .
		 "<div class='imgcont'><img src='data:image/jpeg;base64," .base64_encode($row["Img"]). "'/></div>" .
		 "<div class='container'>" .
		 "<p><b>Product ID: </b>" .$row["ProductID"] . 
		 "<br><b>Product Name: </b>" .$row["Name"] .
		 "<br><b>Price: </b>" .$row["Price"] .
		 "<br><b>Username: </b>" .$row["Username"] .
		 "<br><b>Description: </b>" .$row["Description"] .
		 "</p>" .
		 "</div>" .
		 "<a class='linkbtn' href=wishdelete.php?ID=".$row["ProductID"].">Delete</a>" .
		 "</div>";
		 }
?>

</div>
<div class="footer">
	<div style="float;right">Designed by Hrvoje Tomic (N0825071)<br>January 2020 &copy;<br><a href="logout.php">Log out</a></div><center><a href="index.html" style="text-decoration:none; color:black;">Home<a></center>

	</div>
</div>
</body>
</html>