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
$fkcc=$_SESSION['kcc'];
include('includes/config.php');
if(isset($_POST['submit']))
{
    $k=$_POST['kcc'];
    $no=$_POST['no'];
    $equip=$_SESSION['equip'];
    $eq="SELECT AVAILABLE,RENT FROM $equip WHERE KCC='$k'";
    $eq1=mysqli_query($con,$eq);
    $eq2=mysqli_fetch_assoc($eq1);
    $avail=$eq2['AVAILABLE'];
    $rent=$eq2['RENT'];
    if($avail>=$no)
    {
        $d=date("yy-m-d");
        $in="INSERT INTO RENT VALUES('$k','$fkcc','$equip','$rent','$no','$d')";
        if($in2=mysqli_query($con,$in))
        {
            echo "inserted";
            mysqli_query($con,"UPDATE $equip SET AVAILABLE=AVAILABLE-$no WHERE KCC='$k'");
        }
        else
        echo "failed";
    }
    else
    echo "LIMIT EXCEEDED";
}
?>