<?php
include('includes/config.php');
if(empty($_SESSION))
session_start();
if(isset($_POST['submit']))
{
    $id=$_POST['SOIL_TYPE'];
    $p=$_POST['AREA_HECT'];
    $l=$_POST['CROP'];
    $admin=$_SESSION['kcc'];
    $in="INSERT INTO PLANTATION VALUES('$admin','$id','$p','$l')";
    $in1=mysqli_query($con,$in);
    if($in1)
    {
        header("location:farmer_home.php");
    }
    else
    {
        echo "error occured";
    }
}
?>