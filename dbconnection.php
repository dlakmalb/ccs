<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="customer_complaint_db";
	
	session_start();
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	
	//$conn->close();
?> 