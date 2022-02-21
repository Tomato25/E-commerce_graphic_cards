<?php
include "C:\shares\student\web\SOFT20171\N0826071\PHPLab\connection.php" ;

$stmt=$con->prepare("INSERT INTO userstable (Username, FirstName, LastName, Dateofbirth, Country, Adress, Postcode, Email, Password) VALUES (?,?,?,?,?,?,?,?,?)");		//prepare sql insert statement  
$stmt->bind_param("sssssssss",$username,$fname,$lname,$bday,$country,$adress,$postcode,$email,$pass);		//insert variables in statement

if(isset($_POST["username"])) {			//check user input for username 
	$username=$_POST["username"];		//store user input in variable
	}

if(isset($_POST["fname"])) {		//check user input for first name
	$fname=$_POST["fname"];
	}

if(isset($_POST["lname"])) {		//check user input for last name
	$lname=$_POST["lname"];
	}

if(isset($_POST["bday"])) {			//check user input for date of birth
	$bday=$_POST["bday"];
	}

if(isset($_POST["country"])) {		//check user input for country
	$country=$_POST["country"];
	}

if(isset($_POST["adress"])) {		//check user input for adress
	$adress=$_POST["adress"];
	}

if(isset($_POST["postcode"])) {		//check user input for postcode
	$postcode=$_POST["postcode"];
	}

if(isset($_POST["email"])) {		//check user input for email
	$email=$_POST["email"];
	}

if(isset($_POST["pass"])) {			//check user input for password
	$pass=$_POST["pass"];	
	}

if ($stmt->execute()) {			
	header("Location:user.php");
}
else {
	echo "Error:" .mysqli_error($con);		
}

?>