
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Password Recovery </title>
   
    <link href="css/bootstrap.css" rel="stylesheet" />
    
    <link href="css/font-awesome.css" rel="stylesheet" />
   
    <link href="css/style.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>

</head>
<body>
    
<?php include('includes/header.php');?>
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
<div class="col-md-12">
<h4 class="header-line">Admin's Password Recovery</h4>
</div>
</div>
             
          
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<div class="panel panel-info">
<div class="panel-heading">
 LOGIN FORM
</div>
<div class="panel-body">
<form role="form" name="chngpwd" method="post" onSubmit="return valid();">

<div class="form-group">
<label>Admin's Username</label>
<input class="form-control" type="int" name="kcc" required autocomplete="off" />
</div>

<div class="form-group">
<label>New Password</label>
<input class="form-control" type="password" name="newpassword" required autocomplete="off"  />
</div>

<div class="form-group">
<label>Confirm Password</label>
<input class="form-control" type="password" name="confirmpassword" required autocomplete="off"  />
</div>

 

 <button type="submit" name="change" class="btn btn-info">Change Password</button><a href="adminlogin.php">Login</a>
</form>
 </div>
</div>
</div>
</div>  
           
             
 
    </div>
    </div>      
</body>
</html>
