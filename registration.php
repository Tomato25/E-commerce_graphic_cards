<?php
session_start();

if(isset($_SESSION["Username"])){
	$name=$_SESSION["Username"];
	$lvl=$_SESSION["Lvl"];
	$label="Hello ".$name."!";
				if($_SESSION["Lvl"] == "admin"){		//	if lvl of access == 2 redirect to admin site
					header("Location: admin.php");
				}
				else{		
					header("Location: user.php");
					}
} else {
	$label="SIGN IN";
}
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
	<h1>Register</h1>
	<form action="registrationscript.php" method="post">
	<fieldset>
		<legend>Personal information:</legend>
		<label>Username*</label>
		<input type="text" name="username" required><br><br>
		<label>First Name:*</label>
		<input type="text" name="fname" placeholder="John" maxlength="15" autofocus required><br><br>
		<label>Last Name:*</label>
		<input type="text" name="lname" placeholder="Doe" maxlength="15" required><br><br>	<!--Name input-->
		<label>Date of Birth:*</label>
		<input type="date" name="bday" required><br><br><!--Date of birth-->
		<label>Gender:</label><br><!--Choose sex-->
		<input type="radio" name="gender" value="male"> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
		<input type="radio" name="gender" value="other"> Other
	</fieldset><br><br>
	<label>Country:*</label><br>
	<select name="country" required>
    <option value="UK">United Kingdom</option>
    <option value="RoI">Republic of Ireland</option></select><br><br>    
	<label >Adress:*</label><br>
	<input type="text" name="adress" maxlength="30" required><br><br>
	<label>Postcode:*</label><br> <!--Adress-->
	<input type="text" name="postcode" required><br><br><!--Postcode-->
	<label>Email:*</label><br>	<!--Last name input-->
	<input type="email" name="email" placeholder="sample@mail.com" maxlength="20" required></br><br><!--Email input-->
	<label>Password:*</label><br>
	<input type="password" id="pass1" name="pass" onkeyup="getValue()" required></br><br><!--Password-->
	<label>Repeat Password:*</label><br>
	<input type="password" id="pass2" required><br><br><!--Repeat password-->

	<!--Captcha verification-->
	<input type="submit" value="Submit"><br><!--Submit button-->
	</form>
	</div>

	<div class="col2">
		<h1>Log In</h1>
		<form action="loginscript.php" method="post">
		<fieldset>
		<label>Username:</label>
		<input type="text" name="username"  maxlength="12"><br><br>
		<label>Password:</label>
		<input type="text" name="password" maxlength="8"><br><br>
		<input type="submit" value="Log In"><br>
		</fieldset><br><br>
		</form>
	</div>	
<!--footer div tag with copyright and additional info-->
	<div class="footer">
	<div style="float;right">Designed by Hrvoje Tomic (N0825071)<br>January 2020 &copy;<br><a href="logout.php">Log out</a></div><center><a href="index.html" style="text-decoration:none; color:black;">Home<a></center>

	</div>
</div>
</body>
</html>