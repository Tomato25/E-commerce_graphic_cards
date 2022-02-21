<?php
session_start();

include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
}		
$productid=$_REQUEST["prodID"];


$stmt=$con->prepare("INSERT INTO wishlist (ProductID, Username) VALUES (?,?)");		//prepare sql insert statement  
$stmt->bind_param("ss",$productid,$username);		//insert variables in statement
$stmt->execute();


	
header("Location:products.php") ;

?>