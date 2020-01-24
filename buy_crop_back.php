<?php
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
include('includes/config.php');
$d=date("yy-m-d");
echo $d;
if(isset($_POST['submit']))
{
    $t=$_POST['token'];
$buy="SELECT DAY FROM SLOTS_BOOKED WHERE TOKEN_NO='$t'";
$buy1=mysqli_query($con,$buy);
if(mysqli_num_rows($buy1)>0)
{
    $buy2=mysqli_fetch_assoc($buy1);
    $d1=$buy2['DAY'];
    if($d==$d1)
    {
        mysqli_query($con,"DELETE FROM SLOTS_BOOKED WHERE TOKEN_NO='$t'");
        echo "succesfully bought";
    }
    else
    echo "THIS IS NOT BOOKED FOR TODAY";
}
else
echo "invalid token number";
}
?>