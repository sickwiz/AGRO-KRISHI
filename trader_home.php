<?php 
if(empty($_SESSION))
{
    session_start();
    if(!isset($_SESSION['trader_name']))
    header("location:index.php");
}
else
{
    if(!isset($_SESSION['trader_name']))
    header("location:index.php");
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

    <script type="text/javascript" src='farmer_validation.js'></script>    

    
</head>
<body>
<style>
#logo
{
    border-radius:50px;
}
</style>
<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
               <a class="navbar-brand" >
                   <img id=logo src="img/agroLogo.png" height="100" width="100" />
                </a>

            </div>

        </div>
    </div>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                            <li><a href="logout.php"><b>LOGOUT</b></a></li>
                           </ul>
                           <div id='wel'> WELCOME <?php echo $_SESSION['trader_name'];?> </div>
                           </div>
        </div>
    </section>
         <div class="container">
             <h4 class="header-line"><h3>TRADERS CROP SELECTION</h3></h4>
        </div>
     <div class="form-area1"> 
             <div class="row">
    <div class="col-md-9 col-md-offset-1">
        <h3 align="center">BUY CROP</h3>
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post" action="trader_disp_crop.php">

    <div class="form-group">
    <label><p> PLEASE SELECT CROP YOU ARE INTERESTED IN </p> </label>
    <br>
    <select name='CRO' class="form-control">
  <option default>SELECT YOUR CROP</option>
  <option value="MANGO">MANGO</option>
  <option value="WHEAT">WHEAT </option>
  <option value="RICE">RICE</option>
  <option value="POTATO">POTATO</option>
  <option value="ONION">ONION</option>
</select> 
         
<input  type="submit" name="submit" value="SUBMIT" class="btn btn-danger"/>
                                    </form>
                            </div>
                        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.js"></script>

    <script src="assets/js/custom.js"></script>
</body>
</html>
