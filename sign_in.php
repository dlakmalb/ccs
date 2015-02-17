<?php
	//requre_once("dbconnection.php");
	
	echo ("hi...");
	
	$username = $_POST['inputusername'];
	$password = $_POST['inputpassword'];
		
	$sql = "SELECT COUNT(*) FROM user WHERE username = '$username' AND password='$password'";
	echo $sql;
	
	
	header("location: home.php");
?>
