
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
<form role="form" method="post" action='admin_forgot_password1_backend.php'>

<div class="form-group">
    <label><p>Enter AadharNo</p></label>
<input class="form-control" type="text" name="aadhar" autocomplete="off" required />
    </div>
    <div class="form-group">
    <label><p>Security Question </p> </label>
    <select class="form-control" name='security_question'>
  <option default>Select Your security questions</option>
  <option value="ques1">your best friend</option>
  <option value="ques2">your first job</option>
  <option value="ques3">your favourite holiday destination</option>
  <option value="ques4">favorite dinner</option>
</select> 
</div>
    <div class="form-group">
    <label><p>Answers</p></label>
<input class="form-control" type="text" name="security_question_answer"  />
</div> 

 <button type="submit" name="forgot" class="btn btn-info">Submit</button><a href="adminlogin.php">Login</a> 
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
