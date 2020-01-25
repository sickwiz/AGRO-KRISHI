<?php

$con=mysqli_connect('localhost','sickwiz','2409','SIH');

if(isset($_POST['change']))
{
    

    $password=$_POST['password'];

    $confirmpassword=$_POST['confirmpassword'];

}

if(empty($_SESSION)) 
session_start();
$adharno=$_SESSION['admin_aadhar'];

    if($password==$confirmpassword)
        {
            $password1 = password_hash($password,PASSWORD_ARGON2I);
            $s1 = "update MANAGER_LOGIN set PASSWORD='$password1' where SHOP_ADMIN = '$adharno'";

            $q1 = mysqli_query($con,$s1);

            if($q1)
            {   

                $s2 = "select NAME from SHOP_MANAGER where SHOP_ADMIN='$adharno'";
                $q2 = mysqli_query($con,$s2);

                $name=mysqli_fetch_assoc($q2);

                if(empty($_SESSION)) 
                    session_start();
                    $_SESSION['admin_aadhar']=$adharno;
                    $_SESSION['admin_name'] = $name['NAME'];

                    header("location:admin_home.php");
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
