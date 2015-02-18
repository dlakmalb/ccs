<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="customer_complaint_db";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	
	$code = ($_POST['inputcode']);
	$name = ($_POST['inputname']);
	$address = ($_POST['inputaddress']);
	$telephone1 = ($_POST['inputtelephone1']);
	$telephone2 = ($_POST['inputtelephone2']);
	$fax = ($_POST['inputfax']);
	$email = ($_POST['inputemail']);
	$owner_name = ($_POST['inputownername']);
	$owner_telephone = ($_POST['inputownertelephone']);
	
	
	$sql = "INSERT INTO company (code, name, address, telephone1, telephone2, fax, email, owner_name, owner_telephone)
	VALUES ('".$code."', '".$name."', '".$address."', '".$telephone1."', '".$telephone2."', '".$fax."', '".$email."', '".$owner_name."', '".$owner_telephone."')";
		
	if ($conn->query($sql) === TRUE) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
