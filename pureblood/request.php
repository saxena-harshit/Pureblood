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
</script><style>
    
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
</script>
      </li>
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

<form action="request2.php" method="post">

<ul class="list-group">
    <li class="list-group-item">
 

    
  <div class="row">
  <div class="col-1">  
    
  </div>
  <div class="col-10">  
        <dl>
            <dt>
                <h4>Enter patient name:<br>       <input type='text' name='pname' placeholder='Name'  required></h4>
             </dt>
         </dl>
  </div>
  <div class="col-1" style="padding-top:20px;"></div>
</div>
       
</li>




<li class="list-group-item">
 

    
 <div class="row">
 <div class="col-1">  
   
 </div>
 <div class="col-10">  
       <dl>
           <dt>
               <h4>Enter patient Phone-no<br>       <input type='text' name='pphone' placeholder='Enter phone-no'  required></h4>
            </dt>
        </dl>
 </div>
 <div class="col-1" style="padding-top:20px;"></div>
</div>
      
</li>


<ul class="list-group">
    <li class="list-group-item">
 

    
  <div class="row">
  <div class="col-1">  
    
  </div>
  <div class="col-10">  
        <dl>
            <dt>
                <h4>Enter age:<br>       <input type='text' name='page' placeholder='enter age'  required></h4>
             </dt>
         </dl>
  </div>
  <div class="col-1" style="padding-top:20px;"></div>
</div>
       
</li>


       
<li class="list-group-item">
    <div class="row">
  <div class="col-1">  
    
  </div>
  <div class="col-10">  
   <dl><dt><?php echo "<h4>Required Blood Group:<h4>";?></dt>
    <dd>   <select class="form-control"  style="width: 150px;" name="pgroup" placeholder='No of unit' required>
                  <option>A+</option>
                  <option>A-</option>
                  <option>B+</option>
                  <option>B-</option>
                  <option>O+</option>
                  <option>O-</option>
                  <option>AB+</option>
                  <option>AB-</option>
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
  <div class="col-10">  
   <dl><dt><?php echo "Blood Unit:";?></dt>
    <dd>
                <select class="form-control"  style="width: 150px;" name="unit" placeholder='No of unit'  required>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
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
 <div class="col-10">  
       <dl>
           <dt>
               <h4>Reason:<br>   
                   <input type='text' name='reason' placeholder='Enter the reason'></h4>
            </dt>
        </dl>
 </div>
 <div class="col-1" style="padding-top:20px;"></div>
</div>
      
</li>




<li class="list-group-item">
 

    
 <div class="row">
 <div class="col-1">  
   
 </div>
 <div class="col-10">  
       <dl>
           <dt>
               <h4>Enter city:<br>       <input type='text' name='pcity' placeholder='Enter city'  required></h4>
            </dt>
        </dl>
 </div>
 <div class="col-1" style="padding-top:20px;"></div>
</div>
      
</li>











<li>
    <div class="row">
        <div class="col-1">  

        </div>
        <div class="col-10">   
                <input style='margin-top:10px;margin-left:15px;' type='submit' value='Request'>

              
        </div>
        <div class="col-1" style="padding-top:20px;"></div>
        </div>
  
</li>

</div>

</form>



<a href="https://icons8.com/icon/84994/back"></a>
</body>
</html>