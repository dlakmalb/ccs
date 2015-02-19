<?php require_once("dbconnection.php"); ?> 

<?php	// get user inputs
	
	/*$code = ($_POST['inputcode']);
	$name = ($_POST['inputname']);
	$address = ($_POST['inputaddress']);
	$telephone1 = ($_POST['inputtelephone1']);
	$telephone2 = ($_POST['inputtelephone2']);
	$fax = ($_POST['inputfax']);
	$email = ($_POST['inputemail']);
	$owner_name = ($_POST['inputownername']);
	$owner_telephone = ($_POST['inputownertelephone']);
	*/
	
	$sql = "SELECT code, name, address, telephone1, telephone2, fax, email, owner_name, owner_telephone FROM company";
	$result=mysqli_query($conn,$sql);		
	
	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($rowdata = mysqli_fetch_assoc($result))
			{
			echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			}
	} 
	else 
	{
		echo "0 results";
	}

	mysqli_close($conn);	// close connection

?>
