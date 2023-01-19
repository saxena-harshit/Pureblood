<?php
session_start();
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $gender=$_POST['gender'];
  $pin=$_POST['pin'];
  $hn=$_POST['hn'];
  $address=$_POST['add'];
  $lm=$_POST['lm'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $bg=$_POST['bg'];
  $q=$_POST['question'];
  $ans=$_POST['ans'];


  //to upload an image

$pname=$_FILES['f1']['name'];
$tmpname=$_FILES['f1']['tmp_name'];
$size=$_FILES['f1']['size'];
$target_dir = "photo/";
$target_file = $target_dir . basename($_FILES["f1"]["name"]);

$upload=move_uploaded_file($tmpname,$target_file);



 
  $hostname='localhost';
  $username='root';
  $dbpass='';
  $dbname='purebloodl'; 




  
  
  $con=mysqli_connect($hostname,$username,$dbpass,$dbname);

  $qr="insert into details(name,phone,email,password,question,answer,gender,address,bgroup,pin,city,state,photo)
  value('$fname $lname','$phone','$email','$pass','$q','$ans','$gender','$hn $address ','$bg','$pin','$city','$state','$pname')";
 
 $res=mysqli_query($con,$qr);
 if($res)
 {

  //  echo "login ok..";
  header('location:login.php');
}
else
{
  echo"error";
}


  



  

?>