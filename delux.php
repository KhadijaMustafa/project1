<?php
include 'classicL.php';
include 'reservedlabel.php';
include 'admincontactinfo.php';
                $conn= mysqli_connect('localhost','root','','hotelreservation');
                $query="SELECT `deluxesingleprice`, `deluxedoubleprice`, `deluxetripleprice` FROM `admin` WHERE 1";
                $result=mysqli_query($conn,$query);
                $row= mysqli_fetch_assoc($result);

                $deluxesingleprice=$row['deluxesingleprice'];
                $deluxedoubleprice=$row['deluxedoubleprice'];
                $deluxetripleprice=$row['deluxetripleprice'];

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Deluxe Room</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    .navbar {}

    .d-block {
      width: 100%;
      height: 530px;
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

<body>
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
  <br>
  <center>
    <h1>DELUXE ROOM</h1>
  </center>
  <center>
    <h5>Step into an oasis of tranquillity and calm in the Deluxe Room, with views over the hotel’s beautifully landscaped gardens<br> and beyond to the city. It offers the choice of a comfortable king or twin bed. With a working desk, safety deposit
      box and <br>generously proportioned bathroom with luxurious bath amenities, this room ensures a truly relaxing stay. Smoke-free <br>rooms are also available upon request and availability.</h5>
  </center>
  <br>
  <div class="container" style="background-color: #FFFACD;">

    <div class="row">
      <div class="col-sm-4" id="bor">
        <img src="\project2\img\rr.jpg" class="a-block img-fluid ">
        <br>
        <center>
          <h3>Single Room</h3>
          <h2>Rs: <?php echo $deluxesingleprice; ?></h2>
          <br>
        </center>
        <form action="reservationD.php" method="post" class="form-horizantal">
          Total Room:<?php echo $remainingsingled ?>
          <!-- <div class="form-group">
            <label>Insert room for booking</label>
            <input type="number" name="singleroom" min="0" max="<?php echo $remainingsingled; ?>" class="form-control" placeholder="no of room" style="width: 60%">
          </div> -->


      </div>
      <div class="col-sm-4" id="bor">

        <img src="\project2\img\r8.jpg" class="a-block img-fluid ">
        <br>
        <center>
          <h3>Double Room</h3>
          <h2>Rs: <?php echo $deluxedoubleprice; ?></h2>
          <br>
        </center>
        <!-- <form action="" class="form-horizantal"> -->
        Total Room: <?php echo $remainingdoubled; ?>
        <!-- <div class="form-group">
          <label>Insert room for booking</label>
          <input type="number" name="doubleroom" min="0" max="<?php echo $remainingdoubled; ?>" class="form-control" placeholder="no of room" style="width: 60%">
        </div> -->
      </div>
      <div class="col-sm-4" id="bor">
        <img src="\project2\img\r10.jpg" class="a-block img-fluid ">
        <br>
        <center>
          <h3>Tripple Room</h3>
          <h2>Rs: <?php echo $deluxetripleprice; ?></h2>
          <br>
        </center>
        <!-- <form action="" class="form-horizantal"> -->
        Total Room: <?php echo $remainingtripled; ?>
        <!-- <div class="form-group">
          <label>Insert room for booking</label>
          <input type="number" name="tripleroom" min="0" max="
          <?php 
          echo $remainingtripled; 
          ?>" class="form-control" placeholder="no of room" style="width: 60%">
        </div> -->
        <!-- </form> -->

      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div row align="center">
      <div class="col-sm-10">
        <a href="home.php"><input type="button" value="Back" class="bn"></a>

        <a href="reservationD.php?key=dulex">
          <input type="button" name="Dbook" value="BOOK NOW" class="bn">
        </a>
      </div>
    </div>
    </form>

  </div>
  <br>
  <div class="container" style="border-top: ridge; border-bottom-style: ridge;">
    <br>
    <center>
      <h3>IN-ROOM AMENITIES</h3>
    </center>
    <br>

    <div class="row">

      <div class="col-sm-5">
        <ul>
          <li>Welcome drink upon arrival and daily fruit basket</li>
          <li>Complimentary buffet breakfast in Zamana Restaurant</li>
          <li>Free high-speed internet access</li>
          <li>Daily local newspaper</li>
          <li>Use of gym and swimming pool</li>
        </ul>

      </div>
      <div class="col-sm-5">

        <ul>
          <li>Flat screen HDTV with international channels</li>
          <li>Attached bathroom with bathtub and shower</li>
          <li>24-hour room service</li>
          <li>Safety deposit box</li>

          <li>Tea & coffee maker</li>
          <li>In-room iron and ironing board facility</li>
        </ul>
      </div>
    </div>
  </div>

  <br>
  <br>
  <div class="container-fluid" style="background-color: #E6E6FA;" >
    <br>
    <br>
    <div row align="center">
      <div class="col-sm-12">
        <a class="nav-link footer-links" href="F:project2/FProject.html"><img src="\project2\img\logo.png" width="80px" height="80px"></a>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-4">
        <h1 class="nav-link footer-links text-black"><b>SOCIAL MEDIA</b></h1>

        <a class="nav-link footer-links" href="https://www.facebook.com"><img src="\project2\img\u2.jpg" width="30px" height="30px"></a>

        <a class="nav-link footer-links" href="https://twitter.com"><img src="\project2\img\u3.jpg" width="30px" height="30px"></a>
        <a class="nav-link footer-links" href="https://www.youtube.com"><img src="\project2\img\u4.jpg" width="30px" height="30px"></a>

        <a class="nav-link footer-links" href="https://www.instagram.com"><img src="\project2\img\u1.jpg" width="30px" height="30px"></a>
        <a class="nav-link footer-links" href="https://www.pinterest.com"><img src="\project2\img\u5.jpg" width="30px" height="30px"></a>

      </div>
      <div class="col-sm-4">
        <h1 class="nav-link text-black" href="#"><b>CONTENT</b></h1>


        <a class="nav-link footer-links" href="\project2\accomudation.html"><b>Accomudation</b></a>


        <a class="nav-link footer-links" href="\project2\dinning2.html"><b>Dinning</b></a>
        <a class="nav-link footer-links" href="\project2\offer.html"><b>Offers</b></a>

        <a class="nav-link footer-links" href="\project2\about.html"><b>About Us</b></a>
      </div>
      <div class="col-sm-4">
        <h1 class="nav-link text-black" href="#"><b>CONTACT US</b></h1>
        <a class="nav-link footer-links" href="#"><b>Tel: <?php echo $telno;  ?></b></a>
        <a class="nav-link footer-links" href="#"><b>Fax: <?php echo $faxno;  ?></b></a>
        <a class="nav-link footer-links" href="#"><b>Email: <?php echo $email;  ?></b></a>
      </div>
    </div>
    <hr style="border-bottom: 1px solid #637381">
  </div>

</body>

</html>




</body>

</html>
