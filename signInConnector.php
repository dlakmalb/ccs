<?php
	require_once("dbconnection.php");
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username=addslashes($_POST['inputusername']);		// username and password sent from Form
		$password=addslashes($_POST['inputpassword']);
	
		$sql = "SELECT user_id FROM user WHERE username = '$username' AND password='$password'";
		$result= mysql_query($sql);
		$row=mysql_fetch_array($result);
		$active=$row['active'];
		$rowcount=mysql_num_rows($result);
		
		if ($rowcount==1) 
		{
			session_register("username");
			$_SESSION['login_user']=$username;
			header("location: home.php"); // redirect page
		} 
		else 
		{
			echo "Invalide Credentials...!!!";
		}
	}
	
		
	

	

/*
	$tablename="user";
	
	require_once("dbconnection.php");

	if(empty($_POST['inputusername']))
	{
		echo "Username is Required";		
		return false;
	}
	if(empty($_POST['inputpassword']))
	{
		echo "Password is Required";
		return false;
	}

	$username = $_POST['inputusername'];		// get input username
	$password = $_POST['inputpassword'];		// get input password
		
	$sql = "SELECT COUNT(*) FROM $tablename WHERE username = '$username' AND password='$password'";
	header("location: home.php"); // redirect page
	
	echo $sql="SELECT * FROM $tablename WHERE username='$username' AND password='$password'";
	$result=mysql_query($sql);
	
	$rowcount=mysql_num_rows($result);
	// If result matched $username and $password, table row must be 1 row
	if ($rowcount==FALSE) 
	{
		header("location: home.php"); // redirect page
	} 
	else 
	{
		echo "Invalide Credentials...!!!";
	}

	ob_end_flush();
*/	
?>
