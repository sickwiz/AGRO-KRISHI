<?php
include('includes/config.php');
if(empty($_SESSION))
session_start();
if(isset($_POST['submit']))
{
    $s=$_SESSION['admin_aadhar'];
    $id="SELECT SID FROM SHOP WHERE SHOP_ADMIN='$s'";
    $id1=mysqli_query($con,$id);
    $id2=mysqli_fetch_assoc($id1);
    $s=$_POST['slot'];
    $d=$_POST['dat'];
    $id3=$id2['SID'];
    $in="INSERT INTO SLOTS_AVAILABLE VALUES ('$id3','$s','$d')";
    mysqli_query($con,$in);
}
?>