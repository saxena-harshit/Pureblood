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
         
.link{
  color:grey;
  text-decoration: none;
}
.link:hover{
  color: tomato;
  text-decoration: none;
  text-shadow: 2px 2px 5px rgb(231, 148, 148);
}
  </style>
</head>
<body style="background-color:smokewhite">

<div class="row">
<div class="col-sm-3" >
</div>





<div class="col-sm-6" >
<div class="form" style='padding-left:150px;padding-top:100px;' >
 
<form action="form2.php" method="post"  enctype="multipart/form-data" style="box-shadow:5px 5px 10px gray; padding-left:20px; padding-bottom :20px;  width:400px;border-radius:30px;">
<img src="b2.png" style="margin-left: 100px; margin-bottom: 10px; ">
<h3>Enter your details</h3><br><br>

<h4>First name</h4>
<input class="form-control" type="text" name="fname" placeholder='Enter your first name' required >




<h4>Last name</h4>
<input class="form-control" type="text" name="lname" placeholder='Enter your last name'  required>
<br><br>

      
    <h4>Profile photo</h4>
          
     
                
              
<input type="file" name="f1" value="Browse">
            
            

     
   
<br><br>
<h4>Contact Detail</h4>
<br>

<h4>Phone</h4>
<input class="form-control" type="text" name="phone" placeholder="Enter your contact no"  required>

<h4> Enter Email</h4>
<input class="form-control" type="text" name="email" placeholder="Enter your email"  required>

<h4> Create your password</h4>
<input class="form-control" type="password" name="pass" placeholder="create  your password"  required>


<h4><label for="sel1" >Select security question:</label></h4>
                <select class="form-control"  style="width: 150px;" name="question" id="sel1"  required>
                   <option>Pet name</option>
                   
                   <option>Favourite player</option>
                   <option>Favourite actor</option>
                   <option>Favourite book</option>
                   <option>Favourite movie</option>
  </select>

                
  <h4> Enter answer</h4>
  <input class="form-control" type="text" name="ans" placeholder="Enter your answer"  required>
  


<h4><label for="sel1" >Gender</label></h4>
                <select class="form-control"  style="width: 150px;" name="gender" id="sel1"  required>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
  </select>


  
<h4><label for="sel1" >Blood group</label></h4>
                <select class="form-control"  style="width: 150px;" name="bg" id="sel1"  required>
                  <option>A+</option>
                  <option>A-</option>
                  <option>B+</option>
                  <option>B-</option>
                  <option>AB+</option>
                  <option>AB-</option>
                  <option>O+</option>
                  <option>O-</option>
                  <option>Don't know</option>
  </select>
<h4>Address</h4>
<input class="add" type="text" name="pin" placeholder="Enter your area pin code" required>
<input class="add" type="text" name="hn" placeholder="House no/Building no" required>
<br>
<input class="add" type="text" name="add" placeholder="Address" required>
<input class="add" type="text-area" name="lm" placeholder="Landmark">
<br>
<input class="add" type="text" name="city" placeholder="City" required>

<input class="add" type="text" name="state" placeholder="State"required>



<div class="submit" style="margin:10px;">

<input class="form-control btn btn-danger" type="submit" value="Continue" name='sub'>
</div>
</form>

<br>

<a href="login.php" class="link" style="margin-left:40px">Already have an account? Go to login page</a>
</div>
</div>

<div class="col-sm-3" >
</div>

</div>

</body>
</html>

