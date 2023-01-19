<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];




$hostname='localhost';
$username="root";
$dbpass="";
$dbname="purebloodl";


$con=mysqli_connect($hostname,$username,$dbpass,$dbname);
$qr="SELECT * FROM `details` WHERE email='$email' and password='$pass'";
$res=mysqli_query($con,$qr);
$name="";
$phone="";
$bgroup="";
$address="";
$pin='';
$city="";
$state="";
$photo='';

while($row=mysqli_fetch_array($res))
{
    $name=$row['name'];
    $phone=$row['phone'];
    $gender=$row['gender'];
    $address=$row['address'];
    $pin=$row['pin'];
    $bgroup=$row['bgroup'];
    $city=$row['city'];
    $state=$row['state'];
    $photo=$row['photo']; 

}

$_SESSION['name']=$name;
$_SESSION['phone']=$phone;
$_SESSION['gender']=$gender;
$_SESSION['address']=$address;
$_SESSION['pin']=$pin;
$_SESSION['city']=$city;
$_SESSION['state']=$state;
$_SESSION['bgroup']=$bgroup;
$_SESSION['email']=$email;
$_SESSION['photo']=$photo;

if (mysqli_num_rows($res)>0)
{
    //echo"login successful";
    header('location:page1.html');

}

else{
   header('location:login.php?id2=2');
}



?>