<?php
if(empty($_SESSION))
{
    session_start();
    if(!isset($_SESSION['name']))
    header("location:index.php");
}
else
{
    if(!isset($_SESSION['name']))
    header("location:index.php");
}
include('includes/config.php');
$k=$_SESSION['kcc'];
// echo $k;
$s="SELECT SID,DAY,TOKEN_NO FROM SLOTS_BOOKED WHERE KCC='$k'";
$s2=mysqli_query($con,$s);
$s3=mysqli_num_rows($s2);
if($s3>0)
{
$s4=mysqli_fetch_assoc($s2);
$sid=$s4['SID'];
$day=$s4['DAY'];
$t=$s4['TOKEN_NO'];
$addr="SELECT LOCATION,PINCODE FROM SHOP WHERE SID='$sid'";
$addr1=mysqli_query($con,$addr);
$addr2=mysqli_fetch_assoc($addr1);
$loc=$addr2['LOCATION'];
$pin=$addr2['PINCODE'];
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MANAGE YOUR BOOKINGS</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <li><a href="farmer_home.php"><b>HOME</b></a></li>                      
                            <li><a href="logout.php"><b>LOGOUT</b></a></li>
                            <!--<li id='wel'><b>WELCOME <?php echo $_SESSION['name'] ?></b></li>-->
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['name'] ?></div>
                           </div>
        </div>
    </section>
    <h2>your booking </h2>
    <table border='20px'>
    <!-- <tr><th> YOUR BOOKING </th> </tr> -->
    <tr>
     <td> SID </td>
    <td> TOKEN </td>
    <td>DATE </td>
    <td> SHOP LOCATION </td>
    <td>PIN CODE </td>
    </tr> 
    <tr>
    <td><?php echo $sid; ?> </td>
    <td> <?php echo $t; ?></td>
    <td><?php echo $day ?> </td>
    <td><?php echo $loc;?> </td>
    <td><?php echo $pin;?> </td>
    </tr>
    </table>
    <br><a href='book_slot.php'><h2>CLICK TO VIEW SLOTS </a>
</body>
</html>