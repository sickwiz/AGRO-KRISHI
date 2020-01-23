<?php
$con= mysqli_connect('localhost','sickwiz','2409','SIH');
if(isset($_POST["submit"]))
{
    $kc=$_POST['kcc'];
    $w="SELECT NAME FROM FARMER WHERE KCC='$kc'";
    $res=mysqli_query($con,$w);

        if(mysqli_num_rows($res)>0)
        {
            echo "THIS KCC USER ALREADY EXIST ! PLEASE ENTER OUR KCC NUMBER TO SIGN UP<br>";
            mysqli_close($con);
        }
    
    else
    {
        $na=$_POST['name'];
        $st=$_POST['state'];
        $ct=$_POST['city'];
        $pin=$_POST['pincode'];
        $pass1=$_POST['password'];
        $pass=password_hash($pass1,PASSWORD_ARGON2I);
        $que=$_POST['ques'];
        $an1=$_POST['ans'];
        $an=password_hash($an1,PASSWORD_ARGON2I);
        $q1="INSERT INTO FARMER_LOGIN VALUES('$kc','$pass','$que','$an')";
        $q2="INSERT INTO FARMER VALUES('$kc','$na','$st','$ct','$pin')";
        $qq=mysqli_query($con,$q1);
        $q=mysqli_query($con,$q2);
        
        if($q) 
        echo "inserted";
        else
        echo "failed";

        if($q) 
        echo "inserted";
        else
         echo "failed";
    }
}
?>