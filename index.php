<?php
session_start();

if(isset($_SESSION["Username"])){
	$name=$_SESSION["Username"];
	$label="Hello ".$name."!";
} else {
	$label="SIGN IN";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="indexstyle.css">
<meta name="viewport" content="width=device-width", initial-scale=1.0">

</head>

<body>
<!--div element for all other elements on the page-->
<div class="wrapper">
<!--header div tag-->

	<div class="header">
	<span class="lg-view"><a href="index.html" style="text-decoration:none; color:black;">PcMegaStore</a></span>
	<span class="sm-view"><a href="index.html" style="text-decoration:none; color:black;">PC</a></span>	<!--Store logo-->
		<div class="iconcon">
		<a href="cart.php"><img id="icon" src="Images/cart.png" alt="ShoppingCart"><!--basket icon-->
		<a href="cart.php" style="text-decoration:none; color:black;">CART</a><!--basket icon-->
		</div>
		
		<div class="iconcon">
		<a href="registration.php"><img id="icon" src="Images/user.png" alt="usericon"></a>		
		<a href="registration.php" style="text-decoration:none; color:black;"><?php echo $label ?></a><!--sign in icon-->
		</div>
	</div>
<!--middle,content div tag with img and details of a product-->
	<div class="navtop">
		<ul class="topnav">		<!--nav bar-->
		<li><a class="active" href="index.html">Home</a></li>
		<li><a href="products.php">products</a></li>
		<li><a href="slideshow.html">Gallery</a></li>
		<li><a href="report.html" >Report</a></li>
		</ul>
	</div>

	<div class="col">
		<div class="img1">
		<img id="nvidia" src="Images/Nvidia.jpg" alt="Nvidia GPU">
		<a href="products.html" style="text-decoration:none; color:white;"><button class="btn">Nvidia Products</button></a>
		</div>
		<div class="img2">
		<img id="radeon" src="Images/Radeon.jpg" alt="Radeon GPU">	
		</div>
		<!--deals img-->
	</div>

<!--footer div tag with copyright and additional info-->
	<div class="footer">
	<div style="float;right">Designed by Hrvoje Tomic (N0825071)<br>January 2020 &copy;</div><center><a href="index.html" style="text-decoration:none; color:black;">Home<a></center>
	</div>
</div>
</body>
</html>