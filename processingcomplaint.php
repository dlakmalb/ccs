<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
				<h4>Processing Complaints</h4>
				<table class="table table-hover table-bordered">
					<tr>
						<th>Company Name</th>
						<th>Employee Name</th>
						<th>Complain Id</th>
						<th>Complain Description</th>
						<th>Proceed Date</th>
						<th>Status</th>
					</tr>
					<tr>
						<td>ABC</td>
						<td>George</td>
						<td>001</td>
						<td>error report</td>
						<td>2015-01-11</td>
						<td>Processing</td>
					</tr>
					<tr>
						<td>DEF</td>
						<td>Nipun</td>
						<td>002</td>
						<td>cheque error</td>
						<td>2015-01-24</td>
						<td>processing</td>
					</tr>
				</table>
			</div>
			<div class="form-group">
				<div class="col-lg-5 col-lg-offset-7">
					<button type="submit" class="btn btn-primary">Postpone</button>
					<button type="submit" class="btn btn-primary">Suspend</button>
					<button type="submit" class="btn btn-primary">Pause</button>
					<button type="submit" class="btn btn-primary">Complete</button>
				</div>
			</div>
		</div>  
    </body>
</html>