<?php

@include 'navigation.html';

	$name = $_POST['name'];
	$emailAddress = $_POST['emailAddress'];
	$address = $_POST['address'];
	$numberOfBoreholes = $_POST['numberOfBoreholes'];
	$Registered = $_POST['Registered'];
	$appliedAuthorityToDrill = $_POST['appliedAuthorityToDrill'];
	$CoodinateX = $_POST['CoodinateX'];
	$CoodinateY = $_POST['CoodinateY'];
	$contactNumber = $_POST['contactNumber'];
	$intededUse = $_POST['intededUse'];

	// Database connection
	$conn = new mysqli('localhost','u362373351_jeremiahl','1trustTh3e*','u362373351_127_0_1_1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(name, emailAddress, numberOfBoreholes, address, Registered, appliedAuthorityToDrill, CoodinateX, CoodinateY, contactNumber, intededUse) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisssssis", $name, $emailAddress, $address, $numberOfBoreholes, $Registered, $appliedAuthorityToDrill, $CoodinateX, $CoodinateY, $contactNumber, $intededUse);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>