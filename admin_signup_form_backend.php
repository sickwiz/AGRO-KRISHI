<?php

$con=mysqli_connect('localhost','sickwiz','2409','SIH');

if(isset($_POST['signup']))
{
    $username = $_POST['name'];

    $adharno = $_POST['adhaar'];

    $password = password_hash($_POST['password'],PASSWORD_ARGON2I);

    $confirmpassword = password_hash($_POST['confirmpassword'],PASSWORD_ARGON2I);

    $shopid = $_POST['shopid'];

    $security_question = $_POST['security_question'];

    $secutity_question_answer = password_hash($_POST['security_question_answer'],PASSWORD_ARGON2I);

}


      $s3 = "select NAME from SHOP_MANAGER where SHOP_ADMIN = '$adharno'";

      $q3 = mysqli_query($con,$s3);

    if(mysqli_num_rows($q3)>0)
        {
        
                 echo "this aadhar is already registared";

        }
                 else
             {   

  
                         $s2 = "insert into MANAGER_LOGIN values('$adharno','$password','$security_question','$secutity_question_answer')";

                         $q2 = mysqli_query($con,$s2);
    
                    if($q2)
                  {
                              $s1 = "insert into SHOP_MANAGER values('$username','$adharno')";
    
                         $q1 = mysqli_query($con,$s1);
    
            }
        else
        echo 'nahi hua';
    }





?>