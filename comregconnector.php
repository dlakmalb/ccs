<?php require_once("dbconnection.php"); ?> 

<?php	// get user inputs
	
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
	
	$result=mysqli_query($conn,$sql);		
	
	if ($result) 
	{
		header("Location: companyreg.php");		// redirect after filling company registration form
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);	// close connection

?>
