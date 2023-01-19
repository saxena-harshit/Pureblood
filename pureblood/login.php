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
  <script>
    function preventBack() {
        window.history.forward();
    }

    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null
    };
</script>
  <style>
        
.link{
  color:grey;
  text-decoration: none;
}
.link:hover{
  color: tomato;
  text-decoration: none;
  text-shadow: 2px 2px 5px rgb(231, 148, 148);
}
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
<div class="form" style='padding-left:150px;padding-top:100px;'>
 
<form action="login2.php" method="post" style="box-shadow:5px 5px 10px gray; padding-left:20px; padding-bottom :20px;  width:400px;border-radius:30px;">
<img src="b2.png" style="margin-left: 100px; margin-bottom: 10px; ">
 

<h4> Enter Email</h4>
<input class="form-control" type="text" name="email" placeholder="Enter your email" required >



<h4> Enter your password</h4>
<input class="form-control" type="password" name="pass" placeholder="Enter  your password" required >

<br>

<input class="form-control btn btn-danger" type="submit" value="Log_in" name='sub'>
</div>
</form>

<br>


</div>
</div>

<div class="col-sm-3" >
</div>

</div>
<center><a href='form.php' class='link'>To create a new account click here  </center>
<?php 
if (isset($_GET['id']))
{

echo"<center><h5 style='color:red;'>Fill all fields</h5></center>";

}


if (isset($_GET['id2']))
{

echo"<center><h5 style='color:red;'>Invalid email or password</h5>
<h5><a href='forgot.html' class='link'>forget password??</h5></center>";

}






?>
</body>
</html>

<br>


