<?php require_once("dbconnection.php"); ?> 

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Customer Complain System</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/select2.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
		<link rel="stylesheet" type="text/css" href="css/select2-bootstrap3.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/select2.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/moment.js"></script>
		
    </head>
    <body background="images/background.PNG"> 
		<div class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">
						Customer Complain System
					</a>
				</div>

				<div class="collapse navbar-collapse" >
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								Registration 
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="companyreg.php">Company</a></li>
								<li><a href="employeereg.php">Employee</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								Complaints 
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="addcomplaint.php">Add Complaint</a></li>
								<li><a href="processingcomplaint.php">Processing Complaints</a></li>
								<li><a href="completedcomplaint.php">Completed Complaints</a></li>
							</ul>
						</li>
						<li>
							<a href="history.php">History</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form class="form-horizontal" action="addconnector.php" method="POST">
						<fieldset>
							<legend>Add Complaint</legend>
							<div class="form-group">
								<label for="inputcompany" class="col-lg-3 control-label">Company</label>
								<div class="col-lg-9">
									<select class="form-control input-sm" id="selectcompany" name="selectcompany">
									<option> </option>
									
										<?php		// load company names to select box
											$sql = "SELECT name, code FROM `company`";
											$result = mysqli_query($conn, $sql);
											while($row=mysqli_fetch_array($result, MYSQL_ASSOC))
											{                                                 
												echo "<option value='".$row['code']."'>".$row['code']."-".$row['name']."</option>";
											}
												"</select>"
										?>
										
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputemployee" class="col-lg-3 control-label">Employee</label>
								<div class="col-lg-9">
									<select class="form-control input-sm" id="selectemployee" name="selectemployee">
									  <option> </option>
									  
										<?php		// load employee names to select box
											$sql = "SELECT name, code FROM `employee`";
											$result = mysqli_query($conn, $sql);
											while($row=mysqli_fetch_array($result, MYSQL_ASSOC))
											{                                                 
												echo "<option value='".$row['code']."'>".$row['code']."-".$row['name']."</option>";
											}
												"</select>"
										?>
										
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputcomplaintid" class="col-lg-3 control-label">Complaint Id</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputcomplaintid" name="inputcomplaintid" placeholder="Complaint Id" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputdate" class="col-lg-3 control-label">Created Date</label>
								<div class="col-lg-9">
									<input type="text" class="form-control input-sm textTransparent textBorder" id='datetimepicker' name='datetimepicker' placeholder="Created Date"/>
								</div>	
							</div>
							<div class="form-group">
								<label for="inputtitle" class="col-lg-3 control-label">Title</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputtitle" name="inputtitle" placeholder="Title" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputcomplaintdes" class="col-lg-3 control-label">Descrption</label>
								<div class="col-lg-9">
									<textarea class="form-control input-sm textTransparent textBorder" rows="5" id="inputcomplaintdes" name="inputcomplaintdes" placeholder="Description"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-4 col-lg-offset-8">
									<button type="submit" class="btn btn-primary">Add Complaint</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		
	<script>$("#selectcompany").select2({ placeholder: "Select a Company"});</script>
	<script>$("#selectemployee").select2({ placeholder: "Select a Employee"});</script>
	<script type="text/javascript">
		$(function () 
		{
			$('#datetimepicker').datetimepicker();
		});
    </script>
    </body>
	

</html>