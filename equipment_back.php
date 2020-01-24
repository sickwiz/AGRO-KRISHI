<?php
$con= mysqli_connect('localhost','sickwiz','2409','SIH');
if(isset($_POST["submit"]))
{
    
    if(empty($_SESSION))
       session_start(); 
      
    
    $eq=$_POST['equip'];
    $qu=$_POST['quant'];
    $re=$_POST['rent'];
   
    $kc=$_SESSION['kcc'];
    $q1="INSERT INTO $eq VALUES('$kc','$qu','$re')";
    $q=mysqli_query($con,$q1);;

    if($q)
        echo "sucess add";
    else
        echo "failed add";    
    

    
}
?>