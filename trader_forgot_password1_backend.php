<?php


$con=mysqli_connect('localhost','sickwiz','2409','SIH');

if(isset($_POST['forgot']))
{
    

    $adharno = $_POST['aadhar'];

    $security_question=$_POST['security_question'];

    $security_question_answer=$_POST['security_question_answer'];

}


      $s1 = "select SECUIRTY_QUES,SECUIRTY_PASS from TRADER where AADHAR = '$adharno'";

      $q1 = mysqli_query($con,$s1);

    if(mysqli_num_rows($q1)>0)
        {

                $w = mysqli_fetch_assoc($q1);

                if($security_question==$w['SECUIRTY_QUES'] && password_verify($security_question_answer,$w['SECUIRTY_PASS']))
                {  
                    
                    if(empty($_SESSION)) 
                      session_start();
                    $_SESSION['trader_aadhar']=$adharno;
                       header("location:trader_forgot_password2.php"); 

                    }
                else
                {
                    echo " security question wrong or answer";
                }

                 
            }
        
                 else
             {   

                        echo "Invalide Aadharno or yet not registered";
        
    }





?>
