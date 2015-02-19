<?php require_once("dbconnection.php"); ?> 

<?php
	
	$username = $_POST['inputusername'];		// get input username
	$password = $_POST['inputpassword'];		// get input password

	if(empty($_POST['inputusername']))	// check user inputs
	{
		echo "Username is Required";		
		return false;
	}
	if(empty($_POST['inputpassword']))
	{
		echo "Password is Required";
		return false;
	}
	
	$sql="SELECT username, password FROM user WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn,$sql);
	
	$rowcount=mysqli_fetch_array($result, MYSQLI_BOTH);

	if($rowcount && ( $rowcount['password'] == $_POST['inputpassword']))	// username and password match
	{
		$_SESSION['username'] = $rowcount['username']; // accept login
		
		if( $_POST['redirect'] == "")	// if no redirection required
		{

			header("Location: home.php");
		}
		
	}
	else	// wrong combination
	{
		header("Location: index.php?sucess=0");
	}
	
	mysqli_close($conn);	// close connection

?>
