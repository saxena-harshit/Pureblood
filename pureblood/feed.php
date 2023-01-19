<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=3">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/3.16.0/umd/popper.min.js"></script>
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
  z-index: 3;
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
<div class="container-fluid bg-light" ]>
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






    
<div class="row">
    <div class="col-3">  

    </div>
    <div class="col-6">  
       



        <!--php-->
        <?php

        $hostname='localhost';
        $username="root";
        $dbpass="";
        $dbname="purebloodl";


        $con=mysqli_connect($hostname,$username,$dbpass,$dbname);
        $qr="select * from details3";
        $res=mysqli_query($con,$qr);


        $rname="";
        $rphoto="";
        $rcity="";
        $rstate="";
        $rphone="";

        $pname='';
        $pphone='';
        $pblood='';
        $punit='';
        $pcity='';
        $pcontact='';
        $preason='';

        $dname='';
        $dcity='';
        $dphone='';
        

        



        while($row=mysqli_fetch_array($res))
        {
            $rname=$row['rname'];
            $rphoto=$row['rphoto'];
            $rcity=$row['rcity'];
            $rstate=$row['rstate'];
            $rphone=$row['rphone'];
           

            $pname=$row['name'];
            $pphone=$row['phone'];
            $pblood=$row['bgroup'];
            $punit=$row['unit'];
            $pcity=$row['city'];
            $pcontact=$row['phone'];
            $preason=$row['reason'];
            $dname=$row['dname'];
            $dcity=$row['dcity'];
            $dphone=$row['dphone'];

           

            if($dname!='')
            {
              $status="donated";
            
            
         
            
            



        //card



        echo"
        <div class='conatiner bg-dark' style='height: 100px;' >

            <div class='row'>
                <div class='col-sm-2'>
                    <img src='photo/$rphoto' class='rounded-circle' height='80px' width='80px' style='margin-left: 10px;margin-top:10px ;'>
                </div>
                <div class='col-sm-7' style='color: white; margin-top: 30px;'><h4>$rname</h4>
                    <h6>$rcity|$rstate</h6>
                 </div>

                 <div class='col-sm-3' style='color: white; margin-top: 30px;'><h4>$rphone</h4>
                  
                 </div>
            </div>
        </div>
        <div class='container bg-light'>
           <pre>
            <h6>Patient name:   $pname</h6>
            <h6>Required Blood: $pblood</h6>
            <h6>Unit:           $punit</h6>
            <h6>city:           $pcity</h6>
            <h6>contact no:     $pcontact</h6>
            <h6>Reason:         $preason</h6>
            <h6>status:         $status</h6>
            <h6>Donor details::</h6>
            <h6>donor name:         $dname</h6>
            <h6>donor phone:         $dphone</h6>
            <h6>donor city:         $dcity</h6>

            
            </pre>
           
        </div>
        <div class=' container bg-dark' style='height: 40px;'>
        <p class='link'>requirement is fullfilled</p>
           
        </div><hr>";
            }
            else{
              $status=" Not donated yet";
            
            
         
            
            



              //card
      
      
      
              echo"
              <div class='conatiner bg-dark' style='height: 100px;' >
      
                  <div class='row'>
                      <div class='col-sm-2'>
                          <img src='photo/$rphoto' class='rounded-circle' height='80px' width='80px' style='margin-left: 10px;margin-top:10px ;'>
                      </div>
                      <div class='col-sm-7' style='color: white; margin-top: 30px;'><h4>$rname</h4>
                          <h6>$rcity|$rstate</h6>
                       </div>
      
                       <div class='col-sm-3' style='color: white; margin-top: 30px;'><h4>$rphone</h4>
                        
                       </div>
                  </div>
              </div>
              <div class='container bg-light'>
                 <pre>
                  <h6>Patient name:   $pname</h6>
                  <h6>Required Blood: $pblood</h6>
                  <h6>Unit:           $punit</h6>
                  <h6>city:           $pcity</h6>
                  <h6>contact no:     $pcontact</h6>
                  <h6>Reason:         $preason</h6>
                  
                  <h6>status:         $status</h6>
                  
                  
                  </pre>
                 
              </div>
              <div class=' container bg-dark' style='height: 40px;'>
              <a class='link' href='donor.php?con=$rphone' style='padding-top:30px;' > >Donate blood</a>
                 
              </div><hr>";
            

            }
        }

        ?>
 
    
   
     
    </div>




    <div class="col-3" >
  

    </div>
</div>





<a class='link' href="https://icons8.com/icon/EDZuk72S1FJ7/home"></a>
<a class='link' href="https://icons8.com/icon/7Ffvtg1xmgaV/test-account"></a>
</body>
</html>