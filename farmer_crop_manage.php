<?php
include('includes/config.php');
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
$kcc=$_SESSION['kcc'];
$s1="delete from PLANTATION where KCC='$kcc'";
$q1=mysqli_query($con,$s1);

if($q1)
{
    header("location:farmer_home.php");

}
else
echo "error occur";