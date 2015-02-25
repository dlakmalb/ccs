<?php require_once("dbconnection.php"); ?> 

<?php	// get user inputs
	
	$code = ($_POST['inputemployeecode']);
	$name = ($_POST['inputemployeename']);
	$telephone = ($_POST['inputtelephone']);
	$company = ($_POST['selectcompany']);
	$salutation = ($_POST['selectsalutation']);
	
	$sql = "SELECT name FROM `company`";
    $result = mysqli_query($qry, $conn);
	
	
	$sql = "INSERT INTO employee (code, name, telephone, company, salutation)
	VALUES ('".$code."', '".$name."', '".$telephone."','".$company."','".$salutation."')";
	
	$result=mysqli_query($conn,$sql);		
	
	if ($result) 
	{
		header("Location: employeereg.php");		// redirect after filling company registration form
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);	// close connection

?>
