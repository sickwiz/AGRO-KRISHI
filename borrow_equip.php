<?php
include('includes/config.php'); 
    if(empty($_SESSION))
       session_start(); 
      
   
    $kc=$_SESSION['kcc'];
    // echo $kc;
    $q1="SELECT FROM_KCC,EQUIPMENT,NO_EQUIP,ISSUE_DATE FROM RENT WHERE TO_KCC='$kc'";
    $q=mysqli_query($con,$q1);
    if(mysqli_num_rows($q)>0)
    {
        // echo "hello";
        $name=array();
        $eqi=array();
        $k=array();
        $nolist=array();
        $dlist=array();
        while($p=mysqli_fetch_assoc($q))
        {
            array_push($eqi,$p['EQUIPMENT']);
        array_push($k,$p['FROM_KCC']);
        array_push($nolist,$p['NO_EQUIP']);
        array_push($dlist,$p['ISSUE_DATE']);
        $y=$p['FROM_KCC'];
        $q2="SELECT NAME FROM FARMER WHERE KCC='$y'";
        $qq=mysqli_query($con,$q2);
        $pp=mysqli_fetch_assoc($qq);
            array_push($name,$pp['NAME']);
        }
        


    }
$length=count($eqi);  
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
                       
                        <li><a href="add_equipment.php"><b>ADD EQUIPMENT</b></a></li>
                            <li><a href="rent_list.php"><b>SEE RENTED</b></a></li>
                            <li><a href="rent_equip.php"><b>RENT EQIPMENTS</b></a></li>
                            <li><a href="farmer_home.php"><b>home</b></a></li>
                            <li><a href="logout.php"><b>LOGOUT</b></a></li>
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['name'] ?></div>
                           </div>
        </div>
    </section>

    <center><font size= "6"><b><span> YOU HAVE RENTED EQUIPMENTS FROM THESE PEOPLE</span></font size></b></center>
   <hr>
    <table align=center border=5px>
    <tr id="head">
    <td> NAME </td>
    <td> KCC </td>
    <td> EQUIPMENT </td>
    <td> NO OF EQUIPMENTS </td>
    <td> ISSUE DATE </td>
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
        echo $k[$x]."<br><hr>";
    }
    ?>
      </td>
      <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $eqi[$x]."<br> <hr>";
    }
    ?>
</td>
<td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $nolist[$x]."<br> <hr>";
    }
    ?>
</td>
<td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $dlist[$x]."<br> <hr>";
    }
    ?>
</td>
</tr>
</table>
    </body>
    </html>