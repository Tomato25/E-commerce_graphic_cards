<?php
session_start();

include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
}		
$productid=$_REQUEST["prodID"];
$quantity=1;

$stmt=$con->prepare("INSERT INTO carttable (ProductID, Username, Quantity) VALUES (?,?,?)");		//prepare sql insert statement  
$stmt->bind_param("sss",$productid,$username,$quantity);		//insert variables in statement
$stmt->execute();


	
header("Location:products.php") ;

?>