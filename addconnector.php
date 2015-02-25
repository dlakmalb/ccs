<?php require_once("dbconnection.php"); ?> 

<?php	// get user inputs
	
	$company = ($_POST['selectcompany']);
	$employee = ($_POST['selectemployee']);
	$id = ($_POST['inputcomplaintid']);
	$title = ($_POST['inputtitle']);
	$date = ($_POST['datetimepicker']);
	$des = ($_POST['inputcomplaintdes']);
	
	$sql = "SELECT complain_id FROM `complain`";
    $result = mysqli_query($conn,$sql);
	
	
	$sql = "INSERT INTO complain (complain_id, title, description, date, status, user, employee)
	VALUES ('".$id."', '".$title."', '".$des."','".$date."', 'PENDING' , '001','".$employee."')";
	
	$result=mysqli_query($conn,$sql);		
	
	if ($result) 
	{
		header("Location: home.php");		// redirect after filling company registration form
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);	// close connection

?>
