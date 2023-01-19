<?php


$femail=$_POST['email'];
$q=$_POST['question'];
$ans=$_POST['ans'];

session_start();
$_SESSION['femail']=$femail;
$_SESSION['question']=$q;
$_SESSION['answer']=$ans;




$q1='';
$a1='';



$hostname='localhost';
$username='root';
$dbpass='';
$dbname='purebloodl';




$con=mysqli_connect($hostname,$username,$dbpass,$dbname);
$qr="select * from details where email='$femail'";
$res=mysqli_query($con,$qr);


while($row=mysqli_fetch_array($res))
{
$q1=$row['question'];
$a1=$row['answer'];


}



if ($q==$q1 and $ans==$a1)
{
    header('location:forgot3.php');
}
else
{

    echo"<script>alert('error! Try again ')
    window.location='./forgot.html'</script>";
 
}



?>