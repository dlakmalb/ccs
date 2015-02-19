<?php include("dbconnection.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Customer Complain System</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body class="mainBody" background="images/background.PNG">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 vcenter">
                    <div class="title text-center">
                        <h3>
                            Customer Complaint System
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form class="form-horizontal" action="signInConnector.php" method="POST">
                                <div class="form-group">
                                  <input type="text" class="form-control textTransparent textBorder" id="inputusername" name="inputusername" placeholder="Username" />
                                </div>
                                <div class="form-group">
                                  <input type="password" class="form-control textTransparent textBorder" id="inputpassword" name="inputpassword" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                  <input type="checkbox" id="remember_me" name="remember_me"/> Remember me
                                </div>
                                <div class="form-group">
                                  <input class="form-control btn btn-block btn-primary" type="submit" name="signIn" value="Sign In" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>