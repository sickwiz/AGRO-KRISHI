<?php


$con=mysqli_connect('localhost','sickwiz','2409','SIH');

if(isset($_POST['login']))
{
    

    $adharno = $_POST['aadhar'];

    $password =$_POST['password'];

}


      $s1 = "select PASSWORD from MANAGER_LOGIN where SHOP_ADMIN = '$adharno'";

      $q1 = mysqli_query($con,$s1);

    if(mysqli_num_rows($q1)>0)
        {

                $w = mysqli_fetch_assoc($q1);

                if(password_verify($password,$w['PASSWORD']))
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
                    echo "password wrong";
                }

                 

        }
                 else
             {   

                        echo "Invalide Aadharno or yet not registered";
        
    }





?>
