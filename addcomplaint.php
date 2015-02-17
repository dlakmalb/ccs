<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Customer Complain System</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/select2.css" />
		<link rel="stylesheet" type="text/css" href="css/select2-bootstrap3.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/select2.min.js"></script>
		
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
					<form class="form-horizontal">
						<fieldset>
							<legend>Add Complaint</legend>
							<div class="form-group">
								<label for="inputcompany" class="col-lg-3 control-label">Company</label>
								<div class="col-lg-9">
									<select class="form-control input-sm" id="selectemployee">
									  <option> </option>
									  <option>George</option>
									  <option>Nipun</option>
									  <option>ABC</option>
									  <option>DEF</option>
									  <option>GHI</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputemployee" class="col-lg-3 control-label">Employee</label>
								<div class="col-lg-9">
									<select class="form-control input-sm" id="selectcompany">
									  <option> </option>
									  <option>Sandamali</option>
									  <option>abc</option>
									  <option>def</option>
									  <option>ghi</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputcomplaintid" class="col-lg-3 control-label">Complaint Id</label>
								<div class="col-lg-9">
									<input class="form-control input-sm" id="inputcomplaintid" placeholder="Complaint Id" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputdate" class="col-lg-3 control-label">Created Date</label>
								<div class="col-lg-9">
									<input class="form-control input-sm" id="inputdate" placeholder="Created Date" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputtitle" class="col-lg-3 control-label">Title</label>
								<div class="col-lg-9">
									<input class="form-control input-sm" id="inputtitle" placeholder="Title" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="inputcomplaintdes" class="col-lg-3 control-label">Descrption</label>
								<div class="col-lg-9">
									<textarea class="form-control input-sm" rows="5" id="inputcomplaintdes" placeholder="Description"></textarea>
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
    </body>
	

</html>