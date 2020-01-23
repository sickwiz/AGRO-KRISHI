<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AGRO-KRISHI</title>
   
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    
<?php include('includes/header.php');?>
    <div class="container">
    <h4 class="header-line"><h3>FARMER'S LOGIN FORM</h3></h4>
</div>
<div class="form-area">                 
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
    <h3>LOGIN FORM</h3>
</div>
<div class="panel-body">
<form action="farmer_login_back.php" method="post">

<div class="form-group">
    <br>
    <br>
    <label><p>KCC</p></label>
<input class="form-control" type="text" name="kcc"  />
</div>
<div class="form-group">
    <label><p>Password</p></label>
<input class="form-control" type="password" name="password"   />
<p class="help-block"><a href="user-forgot-password.php">Forgot Password</a></p>
</div>

 

 <button type="submit" name="submit" value="submit" class="btn btn-info">LOGIN </button> | <a href="signup.php">Not Register Yet</a>
</form>
 </div>
</div>
</div>
    <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.js"></script>

    <script src="assets/js/custom.js"></script>
</body>
</html>
