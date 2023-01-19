<?php
$email=$_POST['email'];
$pass=$_POST['pass'];



session_start();

$email1=$_SESSION['femail'];
$q=$_SESSION['question'];
$ans=$_SESSION['answer'];



if($email==$email1)
{



    $hostname="localhost";
    $username="root";
    $dbpass="";
    $dbname="purebloodl";


    $con=mysqli_connect($hostname,$username,$dbpass,$dbname);
    $qr="update details set password='$pass' WHERE email='$email' and question='$q' AND answer='$ans'";
    $res=mysqli_query($con,$qr);
    if($res)
    {
        echo"<script>alert('password changed successfully ')
   window.location='./login.php'</script>";


    }
    else
    {
        echo"<script>alert('error! Try again ')
        window.location='./login.php'</script>";
     

    }


}
else
{
    echo"<script>alert('error! Try again ')
    window.location='./forgot.html'</script>";
 

}







?>