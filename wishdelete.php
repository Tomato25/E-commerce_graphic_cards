<?php
session_start();

include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
}

$id=$_REQUEST["ID"];
$sql="DELETE FROM wishlist WHERE ProductID=$id AND Username=$username";

if(mysqli_query($con, $sql))
{
	header("Location:cart.php");
}
else{
	echo mysqli_error($con);
}

?>