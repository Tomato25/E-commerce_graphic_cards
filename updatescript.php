<?php
include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

$stmt=$con->prepare("UPDATE userstable SET Username=? WHERE ID=?" );		//prepare sql select statement
$stmt->bind_param("ss",$username,$id);	

if(isset($_POST["Id"])) {
	$id=$_POST["Id"];
}

if(isset($_POST["username"])) {
	$username=$_POST["username"];
}


$stmt->execute();	

if($stmt->execute()){
	header("Location: edit.php");
} else {
	echo mysqli_error($con);
	}

?>