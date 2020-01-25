

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>AGRO-KRISHI</title>
   
    <link href="css/bootstrap.css" rel="stylesheet" />
    
    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />   
</head>
<body>

<?php include('includes/header.php');?>
         <div class="container">
             <h4 class="header-line"><h3>TRADER'S SIGNUP FORM</h3></h4>
        </div>
<div class="form-area3"> 
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<h3 align="center">SIGNUP FORM</h3>
</div>
<div class="panel-body">
<form name="signup" method="post" action='TRADER_signup_backend.php' onsubmit="return valid();">
<div class="form-group">
<br/><br/>
    <label><p>Username</p></label>
<input class="form-control" type="text" name="name"  />
<br>
<div class="form-group">
    <label><p>Adhaar no</p></label>
<input class="form-control" type="text" name="adhaar" placeholder="xxxx-xxxx-xxxx-xxxx"/>
</div>
<div class="form-group">
    <label><p>CONTACT NO</p></label>
<input class="form-control" type="text" name="mob"/>
</div>

<div class="form-group">
    <label><p>Password</p></label>
<input class="form-control" type="password" name="password"   />
</div>
    <div class="form-group">
    <label><p>Confirm Password</p> </label>
<input class="form-control"  type="password" name="confirmpassword" autocomplete="off" required  />
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
 <br/>
<button type="submit" name="signup" class="btn btn-danger" id="submit">SIGNUP</button>
<a href="TRADER_login.php"><b><button type="button" class="btn btn-danger" id="submit">SIGNIN</button></b></a>

                                    
                             </div>
                            </form>
                       
    <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.js"></script>

    <script src="assets/js/custom.js"></script>
</body>
</html>
