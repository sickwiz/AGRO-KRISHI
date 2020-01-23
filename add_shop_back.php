<?php
include('includes/config.php');
if(empty($_SESSION))
session_start();
if(isset($_POST['submit']))
{
    $id=$_POST['SID'];
    $p=$_POST['PIN'];
    $l=$_POST['LOC'];
    $t=$_POST['TYPE'];
    $admin=$_SESSION['admin_aadhar'];
    $in="INSERT INTO SHOP VALUES('$id','$t','$l','$admin','$p')";
    $in1=mysqli_query($con,$in);
    if($in1)
    {
        header("location:admin_home.php");
    }
    else
    {
        echo "error occured";
    }
}
?>