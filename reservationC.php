<?php 
include 'classicL.php';
include 'reservedlabel.php';

 ?>
<!DOCTYPE html>
<html>

<head>
  <title>Hotel Reservation</title>
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <style type="text/css">
     .body{
      /*background-image: url("img/n8.jpg");*/
      background-color: #fff;
      background-repeat: no-repeat;
      background-size: 100% 100%;
      height: 100%;
      width: 100%;
   }
  #h5{
    background-color:#FFF0F5; 
   text-align: center;
   text-shadow: #808080;
   color: black;
   margin-top: 50px;

  }
   #form{
     background:grey;
    color: #black;
    text-align: left;
    height: auto;
    
       }
  @media only screen and (min-width: 720px)
{
  .container
  {
    margin-left: 300px;
  }
 
}  
    .dropbtn {
      background-color: white;
      color: black;
      padding: 7px;
      font-size: 16px;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      /* display: inline-block; */
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      /* box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); */
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 5px 10px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      /* background-color: #3e8e41; */
    }
    .label-count {
  /* position:inherit; */
  top: 2px;
  margin-left: 15px;
  /* margin-top: 20px; */
  right: 6px;
  font-weight: bold;
  font-size: 15px;
  line-height: 10px;
  background-color: #000;
  padding: 0 4px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px; }     
</style>
</head>
<body class="body">
   <nav class="navbar navbar-expand-md navbar-light bg-light navbar sticky-top">
    <a class="navbar-brand" href="home.php"><img src="./img/logo.png" width="50px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"  style="padding-top:23px; border-radius:7px;">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <span class="label-count" style="color:white;"><?php echo $total; ?></span>

          <a class="nav-link" href="reserved.php">Reserved</a>
        </li>
        <li class="nav-item">
          <span class="label-count" style="color:white;"><?php echo $total1; ?></span>
          <a class="nav-link" href="bookings.php">Bookings</a>
        </li>
        <li class="nav-item dropdown" style="padding-top:23px; background-color:#ad871c; border-radius:7px;">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Accomudation
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="delux.php?key=dulex">Deluxe Room</a>
            <a class="dropdown-item" href="classic.php?key=classic">Classic Room</a>
            <a class="dropdown-item" href="standard.php?key=standard">Standared room</a>
          </div>
        </li>
        <li class="nav-item" style="margin-top:23px;">
          <a class="nav-link" href="tablebook.php">Dinning</a>
        </li>
        <!-- <li class="nav-item dropdown" style="margin-top:23px;">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Dining
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="rakaposhi.php">Rakaposhi</a>
            <a class="dropdown-item" href="zamana.php">Zamana</a>
            <a class="dropdown-item" href="dawat.php">Dawat</a>
          </div>
        </li> -->
        <li class="nav-item" style="margin-top:23px;">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item" style="margin-top:23px;">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item" style="margin-top:23px;">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
      </ul>
      <div class="navbar-nav ml-auto" style="margin-top:23px;">
        <!-- <a href="home.php?logout='1'" class="nav-item nav-link">Logout</a> -->
        <div class="dropdown">
          <button class="dropbtn"><?php echo $_SESSION['email']; ?></button>
          <div class="dropdown-content">
            <a href="history.php">History</a>
            <a href="clientinfo.php">Settings</a>
            <a href="home.php?logout='1'">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="container" >
    <div class="row">
      <div class="col-sm-8" id="h5">
        <br>
        <center>
          <h3>Reservation Form</h3>
        </center>
      </div>
    </div>
  </div>

  <div class="container" >
    <div class="row">
      <div class="col-sm-4" id="form">
        <form method="post" action="reservationC.php" >
          <br>
          <div class="row" style="margin-left: 3px;">
          <div class="form-group">
          <label style="font-weight: bolder; color: white">Single</label>
              <input type="number" class="form-control" min="0" max="<?php echo $remainingsingle; ?>" name="singleroom" id="single" placeholder="no of room" value="0" required="true" style="width: 98%">
              </div>
              <div class="form-group">
                <label style="font-weight: bolder; color: white">Double</label>
              <input type="number" class="form-control" min="0" max="<?php echo $remainingsingle; ?>" name="doubleroom" id="double" placeholder="no of room" value="0" required="true" style="width: 98%">
              </div>
              <div class="form-group">
          <label style="font-weight: bolder; color: white">Triple</label>
              <input type="number" class="form-control" min="0" max="<?php echo $remainingsingle; ?>" name="tripleroom" id="triple" placeholder="no of room" value="0" required="true" style="width: 98%">
              </div>
          </div>  
          <div class="form-group">
            <label style="font-weight: bolder; color: white">Check_In</label>
            <input type="date" id="checkindate" class="form-control" min="<?php echo date("Y-m-d") ; ?>" name="checkin" placeholder="date" required="true" style="border-radius: 7px;">
          </div>
           <div class="form-group">
          <label style="font-weight: bolder; color: white">Check_out</label>
          <input type="date" id="checkout" name="checkout" min="<?php echo date("Y-m-d"); ?>" class="form-control" placeholder="date" required="true" style="border-radius: 7px;">
        </div>
         
      </div>
      <div class="col-sm-4" id="form">
        <br>
        <div class="form-group">
            <label style="font-weight: bolder; color: white">Children</label>
            <select class="form-control" id="children" name="children" placeholder="No of child" required="true" style="border-radius: 7px;">
              <option value="0"></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">10+</option>
            </select>
        </div>
         <div class="form-group">
            <label style="font-weight: bolder; color: white">Adult</label>
            <select class="form-control" id="adult" name="adult" placeholder="No of Adult" required="true" style="border-radius: 7px;">
              <option value="0"></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">10+</option>
            </select>
          </div>
        <div class="form-group">
            <label style="font-weight: bolder; color: white">Any Special request ?</label>
            <textarea class="form-control" id="message11" placeholder="message" rows="4" required="true" style="border-radius: 7px;"></textarea>
          </div>
          <div class="form-group">
          <input type="button" name="reserve" onclick="getInputValue();" class="bn3" value="Submit"  data-toggle="modal" data-target="#exampleModalScrollable">
          <br>
          <br>
          <a href="home.php"><input type="button" class="bn3" value="Back"></a>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Confirm Your Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" onload="getInputValue();" style="width: 1000px;">
                <?php
                $conn= mysqli_connect('localhost','root','','hotelreservation');
                $query="SELECT `classicsingleprice`, `classicdoubleprice`, `classictripleprice` FROM `admin` WHERE 1";
                $result=mysqli_query($conn,$query);
                $row= mysqli_fetch_assoc($result);

                $classicsingleprice=$row['classicsingleprice'];
                $classicdoubleprice=$row['classicdoubleprice'];
                $classictripleprice=$row['classictripleprice'];

                // echo $singleprice;
                ?>
                <script type="text/javascript">
                function getInputValue(){
                  var singlev = document.getElementById('single').value;
                  var doublev = document.getElementById('double').value;
                  var triplev = document.getElementById('triple').value;
                  var checkin = document.getElementById('checkindate').value;
                  var checkout = document.getElementById('checkout').value;
                  var children = document.getElementById('children').value;
                  var adult = document.getElementById('adult').value;
                 var message = document.getElementById('message11').value;
                 document.getElementById('singlem').innerHTML=singlev;
                 document.getElementById('doublem').innerHTML=doublev;
                 document.getElementById('triplem').innerHTML=triplev;
                 document.getElementById('checkin').innerHTML=checkin;
                 document.getElementById('checkoutdate').innerHTML=checkout;
                 document.getElementById('children1').innerHTML=children;
                 document.getElementById('adult1').innerHTML=adult;
                 document.getElementById('message1').innerHTML=message;
                 var classicsingle=<?php echo $classicsingleprice; ?>;
                 var classicdouble=<?php echo $classicdoubleprice; ?>;
                 var classictriple=<?php echo $classictripleprice; ?>;
                 var total=singlev*classicsingle+doublev*classicdouble+triplev*classictriple;
                 document.getElementById('total').innerHTML=total;
              }
                </script>
                
                <div class="row">
                  <div class="column">
                    <h6 style="color:gray; padding-left: 20px;">Single Rooms</h6>
                    <h6 id="singlem" style="padding-left: 40px;"></h6>
                  </div>
                  <div class="column">
                <h6 style="color:gray; padding-left: 20px;">Double Rooms</h6>
                <h6 id="doublem" style="padding-left: 40px;" ></h6>
              </div>
              <div class="column">
                <h6 style="color:gray; padding-left: 20px;">Triple Rooms</h6>
                <h6 id="triplem" style="padding-left: 40px;"></h6>
              </div>
               <div class="column">
                <h6 style="color:gray; padding-left: 20px;">Total Price</h6>
                <h6 id="total" style="padding-left: 40px;"></h6>
              </div>
                </div>
                <hr size="30">
               <div class="row">
                  <h6 style="color:gray;padding-left: 20px;">Check_In Date</h6>
                  <h6 id="checkin" style="padding-left: 40px;"></h6>
                </div>
                <hr size="30">
                <!-- <br> -->
                <div class="row">
                <h6 style="color:gray;padding-left: 20px;">Check_Out Date</h6>
                <h6 id="checkoutdate" style="padding-left: 40px;"></h6>
              </div>
                <hr size="30">
                <!-- <br> -->
                <div class="row">
                <h6 style="color:gray;padding-left: 20px;">Children</h6>
                <h6 id="children1" style="padding-left: 40px;"></h6>
              </div>
                <hr size="30">
                <!-- <br> -->
                <div class="row">
                <h6 style="color:gray;padding-left: 20px;">Adult</h6>
                <h6 id="adult1" style="padding-left: 40px;"></h6>
              </div>
                <hr size="30">
                <!-- <br> -->
                <div class="row">
                <h6 style="color:gray;padding-left: 20px;">Message</h6>
                <h6 id="message1" style="padding-left: 40px;"></h6>
              </div>
                <hr size="30">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="reserve" class="btn btn-primary">Confirm Booking</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>