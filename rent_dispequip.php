<?php
$con= mysqli_connect('localhost','sickwiz','2409','SIH');
if(isset($_POST["submit"]))
{
    
    if(empty($_SESSION))
       session_start(); 
      
    $equi=$_POST['equip'];
    $kc=$_SESSION['kcc'];   
    $q1="SELECT * FROM $equi WHERE KCC!='$kc'";
    $q=mysqli_query($con,$q1);
    

    if(mysqli_num_rows($q)>0)
    {
        
        $kc=array();
        $a=array();
        $name=array();
        $citylist=array();
        $pinlist=array();
        $rentlist=array();
        $statelist=array();
        while($p=mysqli_fetch_assoc($q))
        {
            array_push($a,$p['AVAILABLE']);
            array_push($rentlist,$p['RENT']);
        $y=$p['KCC'];
        array_push($kc,$y);
        $q2="SELECT NAME,CITY,PINCODE,STATE FROM FARMER WHERE KCC='$y'";
        $qq=mysqli_query($con,$q2);
        while($pp=mysqli_fetch_assoc($qq))
        {
            array_push($name,$pp['NAME']);
            array_push($citylist,$pp['CITY']);
            array_push($pinlist,$pp['PINCODE']);
            array_push($statelist,$pp['state']);
        }
        }
    $_SESSION['equip']= $equi;
    }
$length=count($a);    
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
                            <li><a href=""><b>RENT EQIPMENTS</b></a></li>
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['name']; ?></div>
                           </div>
        </div>
    </section>

    <center><font size= "6"><b><span> THE LIST OF PEOPLE YOU RENTED THE EQUIPMENT  </span></font size></b></center>
   <hr>
    <table align=center border=5px>
    <tr id="head">
    <td> KCC </td>
    <td> NAME </td>
    <td> CITY </td>
    <td>STATE </td>
    <td> PINCODE </td>
    <td> NO OF AVAILABLE </td>
    <td> RENT </td>
    </tr>
    <tr>
    <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $kc[$x]."<br> <hr>";
    }
    ?>
      </td>
      <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $name[$x]."<br><hr>";
    }
    ?>
      </td>
      <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $citylist[$x]."<br><hr>";
    }
    ?>
      </td>
      <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $statelist[$x]."<br><hr>";
    }
    ?>
      </td>
      <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $pinlist[$x]."<br><hr>";
    }
    ?>
      </td>
      <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $a[$x]."<br><hr>";
    }
    ?>
      </td>
      <td> 
    <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $rentlist[$x]."<br><hr>";
    }
    ?>
      </td>
      </tr>
      </table>
      <h3> BOOK YOUR EQUIPMENT </h3> <hr>
      <form method='POST' action='book_equip_back.php'>
      <label><p>ENTER KCC OF THE FARMER </p></label> <input type='text' name='kcc' /> <br>
      <label><p>REQUIRED NUMBER OF EQUIPMENTS </p> </label> <input type='number' name='no'/></br>
      <input type='submit' name='submit' value='rent'/> 
      </form>
    </body>
    </html>
 