<?php
session_start();
include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;		//make connection to db

$stmt=$con->prepare("SELECT * FROM userstable WHERE Username=? and Password=?");		//prepare sql select statement
$stmt->bind_param("ss",$username,$password);		//insert variables in statement

if(isset($_POST["username"])){		//check if user has made username input 
	$username=$_POST["username"];		//store user input in variable
}

if(isset($_POST["password"])){
	$password=$_POST["password"];
}

$sql="SELECT * FROM userstable WHERE Username='$username' and Password='$password'";		//set sql statement
		//query the db and store result in variable
$stmt->execute();		//execute query
$result=mysqli_stmt_get_result($stmt);		//store result in variable
$row=mysqli_fetch_assoc($result);		//set result as associative array

if(mysqli_num_rows($result) == 1){		//if number of rows in result == 1 
	$_SESSION["Username"]=$username;	//		set username to session variable
	$_SESSION["Lvl"]=$row["Lvl"];		//		set level of access to session variable
}	
if($_SESSION["Lvl"] == "admin"){		//	if lvl of access == 2 redirect to admin site
	header("Location: admin.php");
}
else{		
	header("Location: index.php");		//	if lvl of access == 1 redirect to homepage		
}
?>