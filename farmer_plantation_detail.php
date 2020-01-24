<?php 
if(empty($_SESSION))
{
    session_start();
    if(!isset($_SESSION['kcc']))
    header("location:index.php");
}
else
{
    if(!isset($_SESSION['kcc']))
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SESSION['name'] ?></title>
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
function crop()
{
    s=document.getElementById('area');
    s.innerHTML="<form action='farmer_plantation_detail_backend.php' method='POST' onsubmit=''><label><p>SOIL TYPE</label></p><input type='text' id='SID' name='SOIL_TYPE' required /> <br><label><p>AREA HECTARE</p></label><input type='text' name='AREA_HECT' id='PIN' required /><br><label><p>CROP</p></label><input type='text' id='TYPE' name='CROP' required /> <br><br><input type='submit' value='ADD' name='submit'/> <br></form>";
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
                            <li><a href="logout.php"><b>LOGOUT</b></a></li>
                            <!--<li id='wel'><b>WELCOME <?php echo $_SESSION['name'] ?></b></li>-->
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['name'] ?></div>
                           </div>
                           
        </div>
    </section>
    <div class="form-area">  
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
    <h3>PLANTATION DETAILS</h3>
    <?php
include('includes/config.php');
$ad=$_SESSION['kcc'];
$sh="SELECT * FROM PLANTATION WHERE KCC='$ad'";
$sh1=mysqli_query($con,$sh);
if(mysqli_num_rows($sh1)>0)
{
    $sh2=mysqli_fetch_assoc($sh1);
    $s1="select PINCODE from FARMER where KCC='$ad'";
    $q1=mysqli_query($con,$s1);
    $d1=mysqli_fetch_assoc($q1);
    echo "<h3> SOIL TYPE-".$sh2['SOIL_TYPE']."<br>"."CROP-".$sh2['CROP']."<br>"."AREA HECT-".$sh2['AREA_HECT']."<br>".$d1['PINCODE']."<br>";
    echo "<a href=farmer_crop_manage.php><input type='button' value='remove crop'/></a>";
}
else
echo "<h3> no crop added </h3> <br> "."<input type='button' value='add' onclick='crop()'/>";
?>
</div>
<div id='area'> </div>
</div>
</div>
</body>
</html>