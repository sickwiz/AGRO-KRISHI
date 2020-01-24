<?php 
if(empty($_SESSION))
{
    session_start();
    if(!isset($_SESSION['admin_name']))
    header("location:index.php");
}
else
{
    if(!isset($_SESSION['admin_name']))
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SESSION['admin_name'] ?></title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
#logo
{
    border-radius:50px;
}
</style>
<script type='text/javascript'>
function shop()
{
    s=document.getElementById('area');
    s.innerHTML="<form action='add_shop_back.php' method='POST' onsubmit=''><label><p>SHOP-ID</label></p><input type='text' id='SID' name='SID' required /> <br><label><p>PINCODE</p></label><input type='text' name='PIN' id='PIN' required /><br><label><p>SHOP-TYPE</p></label><input type='text' id='TYPE' name='TYPE' required /> <br><label><p>LOCATION</p></label><input TYPE='text' name='LOC' id='LOC' required/><br><input type='submit' value='ADD' name='submit'/> <br></form>";
}
</script>
</head>
<body>
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
                        <li><a href="buy_crop.php"><b>BUY CROP</b></a></li>                       
                            <li><a href="logout.php"><b>LOGOUT</b></a></li>
                            <!--<li id='wel'><b>WELCOME <?php echo $_SESSION['admin_name'] ?></b></li>-->
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['admin_name'] ?></div>
                           </div>
                           
        </div>
    </section>
    <div class="form-area">  
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
    <h3>SHOP DETAILS</h3>
    <?php
include('includes/config.php');
$ad=$_SESSION['admin_aadhar'];
$sh="SELECT * FROM SHOP WHERE SHOP_ADMIN='$ad'";
$sh1=mysqli_query($con,$sh);
if(mysqli_num_rows($sh1)>0)
{
    $sh2=mysqli_fetch_assoc($sh1);
    echo "<h3> SHOP ID-".$sh2['SID']."<br>"."LOCATION-".$sh2['LOCATION']."<br>";
    echo "<a href=manage_shop.php><input type='button' value='manage shop'/></a>";
}
else
echo "<h3> no shops added </h3> <br> "."<input type='button' value='shop' onclick='shop()'/>";
?>
</div>
<div id='area'> </div>
</div>
</div>
</body>
</html>