<?php



session_start();
$name=$_SESSION['name'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];
$bgroup=$_SESSION['bgroup'];
$phone=$_SESSION['phone'];
$address=$_SESSION['address'];
$gender=$_SESSION['gender'];
$pin=$_SESSION['pin'];
$email=$_SESSION['email'];



$issue=$_POST['issue'];
$age=$_POST['age'];
$unit=$_POST['unit'];
$weight=$_POST['weight'];

$_SESSION['issue']=$issue;
$_SESSION['age']=$age;
$_SESSION['unit']=$unit;
$_SESSION['weight']=$weight;


if($issue=="no")
{

if($age>=18)
{

if($weight>=50)
{




    $username='root';
    $hostname='localhost';
    $dbpass='';
    $dbname='purebloodl';
    
    
    $con=mysqli_connect($hostname,$username,$dbpass,$dbname);
    if($con)
    {
        echo'connected';
    
    }
    $qr="insert into `details2`(`name`, `email`, `phone`, `gender`, `address`, `bgroup`, `weight`, `age`, `pin`, `city`)
     VALUES ('$name','$email','$phone','$gender','$address','$bgroup','$weight','$age','$pin','$city')";
     if($qr)
     {
         echo"query ok";
    
     }
    
    
     $res=mysqli_query($con,$qr);
     if($res)
     {
        header('location:thanks.php');
     }
     else{
         header('header:bdonate2.php');
     }
    

}
else{
    echo"<script>alert('under age ')
    window.location='./home.php'</script>";  
}

}
else{

    echo"<script>alert('under age ')
    window.location='./home.php'</script>";
}


}


else{
   echo"<script>alert('you cant donate ')
   window.location='./home.php'</script>";

}










?>
