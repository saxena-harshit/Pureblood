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
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}



.header {
  padding: 20px 16px;
  background:rgb(53, 90, 193);
  color: #f1f1f1;
  height: 100px;
}


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}


.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 80px;
   background-color: rgb(53, 90, 193);
   color: white;
   text-align: center;
}

</style>  
</head>
  <body>





<!--start-->


<div class="container-fluid bg-light" style="">
      <center><img src="b2.png" class="bg-light"style=" margin-bottom: 10px; "></center>

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
</script>   </li>
    <li class="nav-item" style="padding-left:250px;">
      <a class='link' class="nav-link" href="home.php"><img src="https://img.icons8.com/office/30/000000/home--v2.png"/></a>
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
  $city=$_SESSION['city'];
  $state=$_SESSION['state'];
 $bgroup=$_SESSION['bgroup'];
 $phone=$_SESSION['phone'];
 $address=$_SESSION['address'];
 $gender=$_SESSION['gender'];
 $pin=$_SESSION['pin'];
 $state=$_SESSION['state'];
 $city=$_SESSION['city'];
 $email=$_SESSION['email'];



 $contact=$_GET['con'];
 $_SESSION['contact']=$contact;
 


  
  ?></li>












  
  <form action="donor2.php" method=post>



  <ul class="list-group">
    <li class="list-group-item">
 

    
  <div class="row">
  <div class="col-1">  
    
  </div>
  <div class="col-10">    <dl><dt><?php echo $name;?></dt>
    <dd><?php echo $city."|".$state;?></dd>
    
    
  </dl></div>
  <div class="col-1" style="padding-top:20px;"></div>
</div>
       
</li>



<li class="list-group-item">
    <div class="row">
  <div class="col-1">  
    
  </div>
  <div class="col-10">    <dl><dt><?php echo "Phone:";?></dt>
    <dd><?php echo $phone;?></dd>
    
    
  </dl></div>
  <div class="col-1" style="padding-top:20px;"></div>
</div>
       </li>




<li class="list-group-item">
    <div class="row">
  <div class="col-1">  
    
  </div>
  <div class="col-10">    <dl><dt><?php echo "Blood Group:";?></dt>
    <dd><?php echo$bgroup;?></dd>
    
    
  </dl></div>
  <div class="col-1" style="padding-top:20px;"></div>
</div>
       </li>


       
<li class="list-group-item">
    <div class="row">
  <div class="col-1">  
    
  </div>
  <div class="col-10">  
   <dl><dt><?php echo "Blood Unit:";?></dt>
    <dd>
                <select class="form-control"  style="width: 150px;" name="unit">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
    </dd>
    
    
  </dl></div>
  <div class="col-1" style="padding-top:20px;"></div>
</div>
       </li>

       

  





    <li class="list-group-item">

    <div class="row">
  <div class="col-1">  
    
  </div>
  <div class="col-10">    <dl><dt><?php echo "Do you have any health issue?";?></dt>
    <dd><?php echo"<input type='radio' name='issue' value='yes' required>YES    <input type='radio' name='issue' value='no' required >NO"; ?></dd>
    
    
  </dl></div>
  <div class="col-1" style="padding-top:20px;"></div>
</div>

</li>

 

<li class="list-group-item">

<div class="row">
<div class="col-1">  

</div>
<div class="col-10">    <dl><dt><?php echo "If yes then mention your health issues";?></dt>
<dd><?php echo"<input type='text' name='weight' placeholder='Like dibetese/BP etc.' >"; ?></dd>


</dl></div>
<div class="col-1" style="padding-top:20px;"></div>
</div>

</li>





<li class="list-group-item">

<div class="row">
<div class="col-1">  

</div>
<div class="col-10">    <dl><dt><?php echo "Weight";?></dt>
<dd><?php echo"<input type='text' name='weight' placeholder='weight in kg' required>"; ?></dd>


</dl></div>
<div class="col-1" style="padding-top:20px;"></div>
</div>

</li>






<li class="list-group-item">

<div class="row">
<div class="col-1">  

</div>
<div class="col-10">    <dl><dt><?php echo "Age(18-65)";?></dt>
<dd><?php echo"<input type='text' name='age' placeholder='(18-65)' >"; ?></dd>


</dl></div>
<div class="col-1" style="padding-top:20px;"></div>
</div>

</li>

<li>
<div class="row">
<div class="col-1">  

</div>
<div class="col-10">   
  <input style='margin-top:10px;margin-left:15px;' type='submit' value='Donate'>


</div>
<div class="col-1" style="padding-top:20px;"></div>
</div></li>

  </ul>
</div>

</form>



<a href="https://icons8.com/icon/84994/back"></a>
</body>
</html>