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



.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
      </style>
      </head>
<body>
<div class="container-fluid bg-light" style="">
      <center><img src="b2.png" class="bg-light"style=" margin-bottom: 10px; "></center>
<!--NAVBAR-->
      <nav class="navbar navbar-expand-sm t">
          
  <ul class="navbar-nav ">
  <li class="nav-item" style="padding-left:50px;">
<div id="mySidenav" class="sidenav">
  <a class='link' href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class='link' href="home.php">Home</a>
  <a class='link' href="request.php">Request</a>
  <a class='link' href="bdonate.php">Donate</a>
  <a class='link' href="#">Invite friends</a>
  <a class='link' href="profile.php">Profile</a>
  <a class='link' href="about.html">About</a>
 
  <a class='link' href="logout.php">Log-out</a>
  
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script><!--navbar ends-->
      </li>



    <li class="nav-item" style="padding-left:250px;">
      <a class='link' class="nav-link" href="home.php"><img src="https://img.icons8.com/office/32/000000/home--v2.png"/></a>
    </li>
    
    <li class="nav-item" style="padding-left:250px;">
      <a class='link' class="nav-link" href="feed.php"> <img src="https://img.icons8.com/color/32/000000/drop-of-blood.png"/></a>
    </li>


    <li class="nav-item" style="padding-left:250px;">
      <a class='link' class="nav-link" href="map.php"> <img src="https://img.icons8.com/office/32/000000/worldwide-location--v2.png"/></a>
    </li>


    <li class="nav-item" style="padding-left:250px;">
      <a class='link' class="nav-link" href="profile.php"> <img src="https://img.icons8.com/office/32/000000/test-account.png"/></a>
    </li>
  </ul>
</nav>
<br>
</div>



<?php

session_start();

$name=$_SESSION['name'];

$eamil=$_SESSION['email'];

$phone=$_SESSION['phone'];

$gender=$_SESSION['gender'];

$bgroup=$_SESSION['bgroup'];

$address=$_SESSION['address'];

$pin=$_SESSION['pin'];

$city=$_SESSION['city'];

$state=$_SESSION['state'];


echo"<div class='container-fluid bg-danger' style='height:100px; color:white;'>
<center><p style='padding-top:20px;'>$name</p></center>
<center><p style='padding-left:0;'>$city | $state</p></center>



</div>";


?>

<br><br><br>

<div class="container bg-dark" style="border-radius:10px; color:white;">
<h3 style="padding-top:10px;">Request for Blood:</h3>
<p>Are you in need of blood ?<br> request here . we will try our best to help you out.</p>
<br>
<a class='link' href="request.php" > > Request</a>



</div>

<br><br><br>



<div class="container bg-dark" style="border-radius:10px; color:white;">
<h3 style="padding-top:10px;">Donate blood :</h3>
<p>Donate your blood to save someone's life.</p>
<br>
<a class='link' href="bdonate.php" > > Donate</a>



</div>

<br><br><br>


<div class="container bg-dark" style="border-radius:10px; color:white;">
<h3 style="padding-top:10px;">Invite Your friends</h3>
<p>Inviting people can save someones life ,<br>so invite your family memebers and friends who would be able to donate .</p>
<br>
<a class='link' href="#" > > Find</a>



</div>

<br><br><br>
<a class='link' href="https://icons8.com/icon/EDZuk72S1FJ7/home"></a>
<a class='link' href="https://icons8.com/icon/7Ffvtg1xmgaV/test-account"></a>
</body>
</html>
