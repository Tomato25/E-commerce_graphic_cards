<?php
session_start();

include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

if(!isset($_SESSION["Username"])){
	header("Location: registration.php");
}
if(isset($_SESSION["Username"])){
	$name=$_SESSION["Username"];
	$label="Hello ".$name."!";
} else {
	$label="SIGN IN";
}

$sql="SELECT * FROM userstable WHERE Username='$name'";
$result=mysqli_query($con, $sql);

$row=mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="userstyle.css">
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
		<a><img id="icon" src="Images/user.png" alt="ShoppingCart"></a>
		<a style="text-decoration:none; color:black;"><?php echo $label ?></a><!--sign in icon-->
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
	<h1>Your details:</h1>
	
	<fieldset>
		<legend>Personal information:</legend>
		<label>Username*</label><br>
		<p><?php echo $row["Username"];?></p><br>
		<label>First Name:*</label>
		<p><?php echo $row["FirstName"];?></p><br><br>
		<label>Last Name:*</label>
		<p><?php echo $row["LastName"];?></p><br><br>	<!--Name input-->
		<label>Date of Birth:*</label>
		<p><?php echo $row["Dateofbirth"];?></p><br><br><!--Date of birth-->
	</fieldset><br><br>
	<fieldset>
		<legend>Shipping adress:</legend>
	<label>Country:*</label><br>
	<p><?php echo $row["Country"];?></p><br><br>    
	<label >Adress:*</label><br>
	<p><?php echo $row["Adress"];?></p><br><br>
	<label>Postcode:*</label><br> <!--Adress-->
	<p><?php echo $row["Postcode"];?></p><br><br><!--Postcode-->
	<label>Email:*</label><br>	<!--Last name input-->
	<p><?php echo $row["Email"];?></p></br><br>
	</fieldset>
	<form action="usersedit.php" method="POST">
	<input type="submit" value="CHANGE DETAILS">
	</form>
	<!--Email input-->
	
	</div>

	<div class="col2">
	<a class='linkbtn' href="wishlist.php">Wishlist</a>
	</div>	
<!--footer div tag with copyright and additional info-->
	<div class="footer">
	<div style="float;right">Designed by Hrvoje Tomic (N0825071)<br>January 2020 &copy;<br><a href="logout.php">Log out</a></div><center><a href="index.html" style="text-decoration:none; color:black;">Home<a></center>

	</div>
</div>
</body>
</html>