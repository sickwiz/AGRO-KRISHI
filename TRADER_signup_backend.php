<?php

$con=mysqli_connect('localhost','sickwiz','2409','SIH');

if(isset($_POST['signup']))
{
    $username = $_POST['name'];

    $adharno = $_POST['adhaar'];
    $cont = $_POST['mob'];

    $password = password_hash($_POST['password'],PASSWORD_ARGON2I);

    $confirmpassword = password_hash($_POST['confirmpassword'],PASSWORD_ARGON2I);

    $security_question = $_POST['security_question'];

    $secutity_question_answer = password_hash($_POST['security_question_answer'],PASSWORD_ARGON2I);

}


      $s3 = "select NAME from TRADER where SHOP_ADMIN = '$adharno'";

      $q3 = mysqli_query($con,$s3);

    if(mysqli_num_rows($q3)>0)
        {
        
                 echo "this aadhar is already registared";

        }
                 else
             {   

  
                         $s2 = "insert into TRADER values('$adharno','$username','$password','$security_question','$secutity_question_answer','$cont')";

                         $q2 = mysqli_query($con,$s2);

                         if($q2)
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





?>