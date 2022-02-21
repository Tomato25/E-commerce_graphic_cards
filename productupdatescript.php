<?php
session_start();

include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

if(isset($_SESSION["Username"])){
	$user=$_SESSION["Username"];
}
$stmt=$con->prepare("UPDATE products SET Name=?, Price=?, Description=?, Stock=? WHERE ProductID=?");		//prepare sql insert statement  
$stmt->bind_param("sssss",$name,$price,$description,$stock,$id);		//insert variables in statement


if(isset($_POST["Id"])) {			//check user input for username 
	$id=$_POST["Id"];		//store user input in variable
	}

if(isset($_POST["name"])) {		//check user input for first name
	$name=$_POST["name"];
	}

if(isset($_POST["price"])) {		//check user input for last name
	$price=$_POST["price"];
	}

if(isset($_POST["stock"])) {			//check user input for date of birth
	$stock=$_POST["stock"];
	}
	
if(isset($_POST["description"])) {		//check user input for first name
	$description=$_POST["description"];
	}

if ($stmt->execute()) {			
	header("Location:productlist.php");
}
else {
	echo "Error:" .mysqli_error($con);		
}

?>