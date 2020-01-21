<?php include 'registrationL.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
   <meta name="viewport" content="width=device-width , initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">
      .body{
      background-image: url("img/f1.jpg");
      background-color: #cccccc;
      background-repeat: no-repeat;
      background-size: cover;
    

   }
  #h5{
    background-color:#FFF0F5; 
   text-align: center;
   text-shadow: #808080;
   color: black;
   margin-top: 50px;

  }
   #form{
    background:rgba(255,255,255,0.2);
    color: #black;
    text-align: left;
    height: auto;
    margin-left: 0px;
    
       }

       @media only screen and (min-width: 720px)
{
  .container
  {
    margin-left: 300px;
  }
  .bn3{
   width: 83%;
  }
} 
       
</style>
</head>
<body class="body">
  <br>
  <div class="container" >
    <div class="row">

         <div class="col-sm-8" id="h5" >
          <br>
      <h3>Registration Form</h3>
    </div>
    </div>
  </div>
      <div class="container" >
    <div class="row">

              <div class="col-sm-4" id="form">
      <form method="post" name="registerf" action="registration.php">
        <br>

         <div class="form-group">
              <label for="username">User Name*</label>
              <input type="text" id="username" name="username" class="form-control"  placeholder="User Name" required="true" style="border-radius: 7px; border: 1px solid gray;">
            </div>

            <div class="form-group">
           <label for="pass1"> Password*</label>
            <input type="password" id="pass1" name="password" class="form-control" placeholder="Enter password" required="true" style="border-radius: 7px; border: 1px solid gray;">
          </div>
            <div class="form-group">
           <label for="pass2"> Confirm Password*</label>
            <input type="password" id="pass2" name="confirmPassword" class="form-control" placeholder="Enter password" required="true" style="border-radius: 7px; border: 1px solid gray;">
          </div>
          <script>

          function validatenic(){
            var nic=document.getElementById('nic').value;
            var regex=new RegExp(/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/);
            var bool=regex.test(nic);
            if (bool) {
              return true;
            }
            else{
              return false;
            }

          }
          </script>


           </div>
     <div class="col-sm-4" id="form">
      <br>
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="email" required="true" style="border-radius: 7px; border: 1px solid gray;">
          </div>
           <div class="form-group">
            <label for="nic">CNIC NO* </label>
            <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" onkeyup="kick();" maxlength="13" id="nic" name="nic" class="form-control" placeholder="Without dashes" required="true" style="border-radius: 7px; border: 1px solid gray;">
          </div>

            <div class="form-group">
            Phone*
            <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="13" name="phoneNum" class="form-control" placeholder="phone" required="true" style="border-radius: 7px; border: 1px solid gray;">
          </div>

       <br>

            <input type="submit" name="register" class="bn3" value="Register" style="margin-left: 30px; " ><br>
             <center> <p>Already registered<a href="login.php"> Signin</a></p>
        </center>
  </form>
    </div>

  </div>
</body>
</html>
