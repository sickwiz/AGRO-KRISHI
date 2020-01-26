<?php
$con= mysqli_connect('localhost','sickwiz','2409','SIH');
  
    if(empty($_SESSION))
       session_start(); 
      
    $kc=$_SESSION['kcc']; 
    $q1="SELECT * FROM HIRE_PLANTATION WHERE TO_KCC='$kc'";
    $q=mysqli_query($con,$q1);
    if(mysqli_num_rows($q)>0)
    {
   
        
        $name=array();
        $cr=array();
        $phon=array();
        while($p=mysqli_fetch_assoc($q))
        {
            array_push($name,$p['NAME']);
            array_push($cr,$p['CROP']);
            array_push($phon,$p['PHONE']);
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
                            <li><a href="farmer_home.php"><b>HOME</b></a></li>
                            <li><a href="logout.php"><b>LOGOUT</b></a></li>
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['name']; ?></div>
                           </div>
        </div>
    </section>

    <center><font size= "6"><b><span> THE LIST OF PEOPLE WHO ARE INTERESTED IN YOUR CROP </span></font size></b></center>
   <hr>
    <table align=center border=5px>
    <tr id="head">
    <td>TRADER NAME </td>
    <td>CROP</td>
    <td>PHONE</td>
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
        echo $cr[$x]."<br><hr>";
    }
    ?>
      </td>
      <td> 
      <?php 
    for($x=0;$x<$length;$x++)
    {
        echo $phon[$x]."<br><hr>";
    }
    ?>
</td>
</table>
    </body>
    </html>
 