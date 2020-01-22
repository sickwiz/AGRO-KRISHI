<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>AGRO-KRISHI</title>
   
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<script type="text/javascript">

function valid()
{ var num;
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}

</script>
<script>
function checkAvailability() {

 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(signup.email.value))
  {


   $('#submit').prop('disabled',false);
  }
else{
    alert("You have entered an invalid email address!")
  $('#submit').prop('disabled',true);
}
}</script>
<script>
function allLetter()
      { 
      
      if(/^[A-Za-z ]+$/.test(signup.fullanme.value))
      {
      
      $('#submit').prop('disabled',false);
      }
      else
      {
      alert('Please input alphabet characters only');
      $('#submit').prop('disabled',true);
      }
      }</script>
<script>
function phonenumber(inputtxt)
{
  
  if(/^\d{10}$/.test(signup.mobileno.value))
        {
       $('#submit').prop('disabled',false);
        }
      else
        {
        alert("ONLY 10 DIGITS");
        $('#submit').prop('disabled',true);
        }
}
</script>    

</head>
<body>

<?php include('includes/header.php');?>
         <div class="container">
             <h4 class="header-line"><h3>FARMER'S LOGIN</h3></h4>
        </div>
     <div class="form-area1"> 
             <div class="row">
    <div class="col-md-9 col-md-offset-1">
        <h3>LOGIN FORM</h3>
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post" onSubmit="return valid();">
<div class="form-group">
    <br/><br/>
    <label><p>KCC</p></label>
<input class="form-control" type="text" name="kcc" autocomplete="off" required />
</div>

<div class="form-group">
    <label><p>Password</p></label>
<input class="form-control" type="password" name="password"   />
<p class="help-block"><a href="user-forgot-password.php">Forgot Password</a></p>
</div>


                      
<button type="submit" name="signup" class="btn btn-danger" id="submit">Register Now </button>

                                    </form>
                            </div>
                        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.js"></script>

    <script src="assets/js/custom.js"></script>
</body>
</html>
