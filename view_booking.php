<?php
include('includes/config.php');
if(empty($_SESSION))
session_start();

    $s=$_SESSION['admin_aadhar'];
    $id="SELECT SID FROM SHOP WHERE SHOP_ADMIN='$s'";
    $id1=mysqli_query($con,$id);
    $id2=mysqli_fetch_assoc($id1);
    $id3=$id2['SID'];
    $book="SELECT * FROM SLOTS_BOOKED WHERE SID='$id3'";
    $book1=mysqli_query($con,$book);
    if(mysqli_num_rows($book1)>0)
    {
        echo "SID    KCC    DAY   TIME    TOKEN"."<br>";
        while($book2=mysqli_fetch_assoc($book1))
        {
            echo $book2['SID']."  ".$book2['KCC']."  ".$book2['DAY']."  ".$book2['TIME']."  ".$book2['TOKEN_NO'];
        }
    }
    else
    echo "no bookings yet";
?>