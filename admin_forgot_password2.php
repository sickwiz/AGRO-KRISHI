<?php
if(empty($_SESSION)) //if the session not yet started
{
     session_start();
     if(!isset($_SESSION['admin_aadhar']))
     header("location:adminlogin.php");
}
else if(!isset($_SESSION['admin_aadhar']))
{
header("location:adminlogin.php");
exit;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>AGRO KRISHI</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
    
<body >
<?php 
include('includes/header.php');?>
<div class="container">
    
    <h4 class="header-line"><h3>Admin's Password Recovery</h3></h4>
</div>
 <div class="form-area">                      
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<h3 align="center">Forgot Password</h3>
</div>
<div class="panel-body">
<form role="form" method="post" action='admin_forgot_password2_backend.php'>


<div class="form-group">
    <label><p>Password</p></label>
<input class="form-control" type="password" name="password"   />
</div>
    <div class="form-group">
    <label><p>Confirm Password</p> </label>
<input class="form-control"  type="password" name="confirmpassword" autocomplete="off" required  />
</div>

 <button type="submit" name="change" class="btn btn-info">Submit</button><a href="adminlogin.php">Login</a> 
</form>
 </div>
</div>
    </div>
    <br>
    <br>
     <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.js"></script>

    <script src="assets/js/custom.js"></script>
</body>
</html>
