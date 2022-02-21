<?php
session_start();

include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

if(isset($_SESSION["Username"])){
	$name=$_SESSION["Username"];
	$lvl=$_SESSION["Lvl"];
	$label="Hello ".$name."!";
} else {
	$label="SIGN IN";
}

$sql="SELECT * FROM userstable";
$result=mysqli_query($con, $sql);

$row=mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
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
		 "<div class='container'>" .
		 "<p>ID: " .$row["ID"] . 
		 "<br>Username: " .$row["Username"] .
		 "<br>Level of access: " .$row["Lvl"] .
		 "<br>First name: " .$row["FirstName"] .
		 "<br>Last name: " .$row["LastName"] .
		 "</p>" .
		 "</div>" .
		 "<a class='linkbtn' href=update.php?ID=".$row["ID"].">Edit</a>" .
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