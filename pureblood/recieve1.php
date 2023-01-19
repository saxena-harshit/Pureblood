<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
   .form-control{
        width:350px;

   }

   .add{
       margin:5px;
   }
  </style>
</head>
<body style="background-color:smokewhite">

<div class="row">
<div class="col-sm-3" >
</div>





<div class="col-sm-6" >
<div class="form" style='padding-left:150px;padding-top:100px;' action="" method="">
 
<form action="donate2.php" method="post" style="box-shadow:5px 5px 10px gray; padding-left:20px; padding-bottom :20px;  width:400px;border-radius:30px;">
<img src="b2.png" style="margin-left: 100px; margin-bottom: 10px; ">
<h3>Name of reciver</h3><br><br>

<h4>First name</h4>
<input class="form-control" type="text" name="fname" placeholder='Enter your first name' >


<h4>Last name</h4>
<input class="form-control" type="text" name="lname" placeholder='Enter your last name' >


<h4>Contact Detail</h4>
<input class="form-control" type="text" name="phone" placeholder="Enter your contact no" >

<h4> Enter Email</h4>
<input class="form-control" type="text" name="email" placeholder="Enter your email" >


<h4><label for="sel1" >Gender</label></h4>
                <select class="form-control"  style="width: 150px;" name="gender" id="sel1">
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>

<h4>Address</h4>
<input class="add" type="text" name="pin" placeholder="Enter your area pin code">
<input class="add" type="text" name="hn" placeholder="House no/Building no">
<br>
<input class="add" type="text" name="add" placeholder="Address">
<input class="add" type="text-area" name="lm" placeholder="Landmark">
<br>
<input class="add" type="text" name="city" placeholder="City">

<div class="submit" style="margin:10px;">

<input class="form-control btn btn-danger" type="submit" value="Continue" name='sub'>
</div>
</form>
</div>
</div>

<div class="col-sm-3" >
</div>

</div>

</body>
</html>

<br>




<?php
session_start();

$bg=$_GET['bg'];
$_SESSION['bg']=$bg;



?>