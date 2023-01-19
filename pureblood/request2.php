<?php
session_start();
  $pname=$_POST['pname'];
  $page=$_POST['page'];
  $pgroup=$_POST['pgroup'];
  $punit=$_POST['unit'];
  $pphone=$_POST['pphone'];
  $reason=$_POST['reason'];
  $pcity=$_POST['pcity'];
 
  $email=$_SESSION['email'];
  $name=$_SESSION['name'];
  $city=$_SESSION['city'];
  $state=$_SESSION['state'];
  $phone=$_SESSION['phone'];
  $photo=$_SESSION['photo'];

 




 
  $hostname='localhost';
  $username='root';
  $dbpass='';
  $dbname='purebloodl'; 




  
  
  $con=mysqli_connect($hostname,$username,$dbpass,$dbname);
 
  $qr="insert into details3(name, age, bgroup, unit, reason, city, phone,rname,rphone,rcity,rstate,rphoto) 
  VALUES ('$pname','$page','$pgroup','$punit','$reason','$pcity','$pphone','$name','$phone','$city','$state','$photo')";
  
 $res=mysqli_query($con,$qr);
 if($res)
 {

header('location:request3.php');
}
else{
    echo"<script>alert('something went wrong,try again')
    window.location='./request.php'</script>";
 
 }
 

  



  

?>