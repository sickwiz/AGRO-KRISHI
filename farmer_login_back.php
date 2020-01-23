<?php
$con= mysqli_connect('localhost','sickwiz','2409','SIH');
if(isset($_POST["submit"]))
{
    if(empty($_SESSION))
       session_start(); 
    $kc=$_POST['kcc'];
    $pa=$_POST['password'];
    $s="SELECT PASSWORD FROM FARMER_LOGIN WHERE KCC='$kc'";
    $sq="SELECT NAME FROM FARMER WHERE KCC='$kc'";
            $res=mysqli_query($con,$sq);
            $re=mysqli_query($con,$s);
            $name=mysqli_fetch_assoc($res);
            if(mysqli_num_rows($re)>0)
            {
                $row=mysqli_fetch_assoc($re);
            if(password_verify($pa,$row['PASSWORD']))
            {
                echo "logged in";
                $_SESSION['name']=$name['NAME'];
                $_SESSION['kcc']=$kc;
            }
                
            else
                echo "INVALID KCC OR PASSWORD";
            }
            else
                echo "PLEAESE SIGN UP! ACCOUNT NOT EXIST";
}
?>