<?php
$con= mysqli_connect('localhost','sickwiz','2409','SIH');
if(empty($_SESSION))
session_start(); 
  if(isset($_POST['submit']))
  {
    $crop=$_POST['CRO'];
    $q1="SELECT * FROM PLANTATION WHERE CROP='$crop'";
    $q=mysqli_query($con,$q1);
    if(mysqli_num_rows($q)>0)


  {
   

     
     $kc=array();
     $st=array();
     $area=array();
     $name=array();
     $state=array();
     $city=array();
     $pin=array();
     while($p=mysqli_fetch_assoc($q))
     {
         array_push($area,$p['AREA_HECT']);
         array_push($st,$p['SOIL_TYPE']);
         array_push($kc,$p['KCC']);
         $y=$p['KCC'];
         $q2="SELECT * FROM FARMER WHERE KCC='$y'";
         $qq=mysqli_query($con,$q2);
         while($pp=mysqli_fetch_assoc($qq))
         {
             array_push($name,$pp['NAME']);
             array_push($state,$pp['STATE']);
             array_push($city,$pp['CITY']);
             array_push($pin,$pp['PINCODE']);
         }

     }
 }
  }
$length=count($name);    
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
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['trader_name']; ?></div>
                           </div>
        </div>
    </section>

    <center><font size= "6"><b><span> THE LIST OF CROP  </span></font size></b></center>
   <hr>
    <table align=center border=5px>
    <tr id="head">
    <td>FARMER NAME </td>
    <td>KCC NUMBER</td>
    <td>STATE</td>
    <td>CITY</td>
    <td>PINCODE</td>
    <td>SOIL TYPE</td>
    <td>AREA HECT</td>
    </tr>
    <tr>
    <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $name[$x]."<br> <hr>";
    }
    ?>
      </td>
      <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $kc[$x]."<br><hr>";
    }
    ?>
      </td>
      <td> 
      <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $state[$x]."<br><hr>";
    }
    ?>
</td>

<td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $city[$x]."<br> <hr>";
    }
    ?>
      </td>
      <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $pin[$x]."<br><hr>";
    }
    ?>
      </td>
      <td> 
      <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $st[$x]."<br><hr>";
    }
    ?>
</td>
</td>
      <td> 
      <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $area[$x]."<br><hr>";
    }
    ?>
</td>
</table>
<h3> REQUEST FARMER 
<form>
<label><p>ENTER KCC </p></label> <input type='text' name='kcc'/>
<input style="color:black"; type='submit'/>
</form>
    </body>
    </html>
 