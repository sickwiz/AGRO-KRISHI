<?php

$con=mysqli_connect('localhost','sickwiz','2409','SIH');

if(isset($_POST['change']))
{
    

    $password=$_POST['password'];

    $confirmpassword=$_POST['confirmpassword'];

}

if(empty($_SESSION)) 
session_start();
$adharno=$_SESSION['trader_aadhar'];

    if($password==$confirmpassword)
        {
            $password1 = password_hash($password,PASSWORD_ARGON2I);
            $s1 = "update TRADER set PASSWORD='$password1' where AADHAR = '$adharno'";

            $q1 = mysqli_query($con,$s1);

            if($q1)
            {
                $s2 = "select NAME from TRADER where AADHAR='$adharno'";
                $q2 = mysqli_query($con,$s2);

                $name=mysqli_fetch_assoc($q2);

                if(empty($_SESSION)) 
                    session_start();
                    $_SESSION['trader_aadhar']=$adharno;
                    $_SESSION['trader_name'] = $name['NAME'];

                     header("location:trader_home.php");
                    echo "loginhogaya";
            }
            else
            {
                echo "error occure";
            }

                 
            }
        
                 else
             {   

                        echo "both password not equal";
        
    }





?>
