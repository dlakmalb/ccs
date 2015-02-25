<?php include("dbconnection.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Customer Complain System</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
					<form class="form-horizontal" action="comregconnector.php" method="POST">
						<fieldset>
							<legend>Company Registration</legend>
							<div class="form-group">
								<label for="inputcode" class="col-lg-3 control-label">Company Code</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputcode" name="inputcode" placeholder="Company Code" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputname" class="col-lg-3 control-label">Company Name</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputname" name="inputname" placeholder="Company Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputaddress" class="col-lg-3 control-label">Address</label>
								<div class="col-lg-9">
									<textarea class="form-control input-sm textTransparent textBorder" rows="5" id="inputaddress" name="inputaddress" placeholder="Address"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputtelephone1" class="col-lg-3 control-label">Telephone 1</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputtelephone1" name="inputtelephone1" placeholder="Telephone 1" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputtelephone2" class="col-lg-3 control-label">Telephone 2</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputtelephone2" name="inputtelephone2" placeholder="Telephone 2" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputfax" class="col-lg-3 control-label">Fax</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputfax" name="inputfax" placeholder="Fax" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputemail" class="col-lg-3 control-label">Email</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputemail" name="inputemail" placeholder="Email" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputownername" class="col-lg-3 control-label">Owner Name</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputownername" name="inputownername" placeholder="Owner Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputownertelphone" class="col-lg-3 control-label">Owner Tel. No.</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputownertelephone" name="inputownertelephone" placeholder="Owner Telephone No." type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-5 col-lg-offset-7">
									<button type="submit" class="btn btn-primary">Register</button>
									<button type="reset" class="btn btn-default">Cancel</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>

			</div>
		</div>   
    </body>
</html>



