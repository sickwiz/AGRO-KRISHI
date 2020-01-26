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
$avail="SELECT SID,DATE FROM SLOTS_AVAILABLE WHERE NO_SLOTS>0";
$avail1=mysqli_query($con,$avail);
if(mysqli_num_rows($avail1)>0)
{
    $idlist=array();
    $dlist=array();
    $typelist=array();
    $loclist=array();
    $pinlist=array();
    while($avail2=mysqli_fetch_assoc($avail1))
    {
        $id=$avail2['SID'];
        array_push($idlist,$id);
        array_push($dlist,$avail2['DATE']);
        $sh="SELECT LOCATION,PINCODE,TYPE FROM SHOP WHERE SID='$id' ";
        $sh1=mysqli_query($con,$sh);
        $sh2=mysqli_fetch_assoc($sh1);
        array_push($loclist,$sh2['LOCATION']);
        array_push($typelist,$sh2['TYPE']);
        array_push($pinlist,$sh2['PINCODE']);
    }
    $length=count($pinlist);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SLOTS</title>
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
                            <!-- <li><a href="logout.php"><b>LOGOUT</b></a></li> -->
                            <li><a href="logout.php"><b>LOGOUT</b></a></li>
                            <!--<li id='wel'><b>WELCOME <?php echo $_SESSION['name'] ?></b></li>-->
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['name'] ?></div>
                           </div>
        </div>
    </section>
<h1><hr>LIST OF SHOPS </hr> </h1>
<table border=15px>
<tr>
<th>SID</th>
<th>TYPE</th>
<th>LOCATION</th>
<th>PINCODE</th>
<th>DATE</th>
</tr>
<tr> 
<td><?php for($y=0;$y<$length;$y++)
{
    echo $idlist[$y]."<br>";
}
?> </td>
<td><?php for($y=0;$y<$length;$y++)
{
    echo $typelist[$y]."<br>";
}
?> </td>
<td><?php for($y=0;$y<$length;$y++)
{
    echo $loclist[$y]."<br>";
}
?> </td>
<td><?php for($y=0;$y<$length;$y++)
{
    echo $pinlist[$y]."<br>";
}
?> </td>
<td><?php for($y=0;$y<$length;$y++)
{
    echo $dlist[$y]."<br>";
}
?> </td>
</tr>
</table>
<h2><hr>BOOK SLOT <hr> </h2>
<form action='book_slot_back.php' method='POST'>
<label><p>SID </p> </label>
<input type='text' name='sid'/>
<label><p>TYPE </p> </label>
<input type='text' name='type'/>
<label><p>DATE </p> </label>
<input type='date' name='day'/>
<input type='submit' name='submit' value='book'/>
</form>
</body>
</html>