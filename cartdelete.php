<?php
session_start();

include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

$id=$_REQUEST["ID"];
$sql="DELETE FROM carttable WHERE ProductID=$id";

if(mysqli_query($con, $sql))
{
	header("Location:cart.php");
}
else{
	echo mysqli_error($con);
}

?>