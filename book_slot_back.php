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
$k=$_SESSION['kcc'];
if(isset($_POST['submit']))
{
    $sid=$_POST['sid'];
    $t=$_POST['type'];
    $d=$_POST['day'];
    $book="SELECT SID FROM SLOTS_BOOKED WHERE KCC='$k' AND DATE='$d' AND SID='$sid'";
    $book1=mysqli_query($con,$book);
    if(mysqli_num_rows($book1)>0)
    {
        echo "SLOT ALREADY BOOKED FOR THE GIVEN DETAILS";
    }
    else
    {
        $num="SELECT SID FROM SLOTS_BOOKED WHERE SID='$sid' AND DAY='$d'";
        $num1=mysqli_query($con,$num);
        $num2=mysqli_num_rows($num1);
        $t=$k.$sid.$num2;
        $in="INSERT INTO SLOTS_BOOKED VALUES ('$sid','$k','$d','$t')";
        $in1=mysqli_query($con,$in);
        if($in1)
        {   
            $u="UPDATE SLOTS_AVAILABLE SET NO_SLOTS=NO_SLOTS-1 WHERE SID='$sid' AND DATE='$d'";
            $u1=mysqli_query($con,$u);
            mysqli_query($con,"DELETE FROM SLOTS_AVAILABLE WHERE NO_SLOTS=0");
            header("location:farm_book.php");
        }
        else
        echo "error occured";
        }
    }
?>