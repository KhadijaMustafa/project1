  <?php
session_start();
if (!isset($_SESSION['adminemail'])) {
  header('location:adminLogin.php');
}
$success='';
echo $success;  
if (isset($_POST['addroom'])) {
  $conn=mysqli_connect('localhost','root','','hotelreservation');
  $accomodation=$_POST['accomodation'];
  $roomtype=$_POST['type'];
  $price=$_POST['price'];
  $query="INSERT INTO `rooms`(`accomodation`, `price`, `type`, `status`, `booking_id`) VALUES ('$accomodation','$price','$roomtype', 'free', 0)";
  $result=mysqli_query($conn,$query);
  if ($result) {
    $sQuery="SELECT * FROM `admin` WHERE id=1";
    $sResult=mysqli_query($conn, $sQuery);
    $row=mysqli_fetch_assoc($sResult);
    $totalrooms=$row['totalrooms'];
    $classicrooms=$row['classicrooms'];
    $standardrooms=$row['standardrooms'];
    $deluxerooms=$row['deluxerooms'];
    $classicsingle=$row['classicsingle'];
    $classicdouble=$row['classicdouble'];
    $classictriple=$row['classictriple'];
    $standardsingle=$row['standardsingle'];
    $standarddouble=$row['standarddouble'];
    $standardtriple=$row['standardtriple'];
    $deluxesingle=$row['deluxesingle'];
    $deluxedouble=$row['deluxedouble'];
    $deluxetriple=$row['deluxetriple'];
    if ($accomodation=='classic') {
      $totalrooms=$totalrooms+1;
      $classicrooms=$classicrooms+1;
      if ($roomtype=='single') {  
        $classicsingle=$classicsingle+1;
        $query="UPDATE `admin` SET `totalrooms`=$totalrooms,`classicrooms`=$classicrooms,`classicsingle`=$classicsingle WHERE id=1";
        $result=mysqli_query($conn,$query);
        if ($result) {
          $success='Room Added Successfully';
        }
         else {
    $success='There is an Internal Error';
  }
      }
      if ($roomtype=='double') {
        $classicdouble=$classicdouble+1;
        $query="UPDATE `admin` SET `totalrooms`=$totalrooms,`classicrooms`=$classicrooms,`classicdouble`=$classicdouble WHERE id=1";
        $result=mysqli_query($conn,$query);
        if ($result) {
          $success='Room Added Successfully';
        }
         else {
    $success='There is an Internal Error';
  }
      }
      if ($roomtype=='triple') {
        $classictriple=$classictriple+1;
        $query="UPDATE `admin` SET `totalrooms`=$totalrooms,`classicrooms`=$classicrooms,`classictriple`=$classictriple WHERE id=1";
        $result=mysqli_query($conn,$query);
        if ($result) {
          $success='Room Added Successfully';
        }
         else {
          $success='There is an Internal Error';
        }
      }
    }
    if ($accomodation=='standard') {
      $totalrooms=$totalrooms+1;
      $standardrooms=$standardrooms+1;
      if ($roomtype=='single') {
        $standardsingle=$standardsingle+1;
        $query="UPDATE `admin` SET `totalrooms`=$totalrooms,`standardrooms`=$standardrooms,`standardsingle`=$standardsingle WHERE id=1";
        $result=mysqli_query($conn,$query);
        if ($result) {
          $success='Room Added Successfully';
        }
         else {
          $success='There is an Internal Error';
        }
      }
      if ($roomtype=='double') {
        $standarddouble=$standarddouble+1;
        $query="UPDATE `admin` SET `totalrooms`=$totalrooms,`standardrooms`=$standardrooms,`standarddouble`=$standarddouble WHERE id=1";
        $result=mysqli_query($conn,$query);
        if ($result) {
          $success='Room Added Successfully';
        }
         else {
          $success='There is an Internal Error';
        }
      }
      if ($roomtype=='triple') {
        $standardtriple=$standardtriple+1;
        $query="UPDATE `admin` SET `totalrooms`=$totalrooms,`standardrooms`=$standardrooms,`standardtriple`=$standardtriple WHERE id=1";
        $result=mysqli_query($conn,$query);
        if ($result) {
          $success='Room Added Successfully';
        }
         else {
          $success='There is an Internal Error';
        }
      }
    }
    if ($accomodation=='deluxe') {
      $totalrooms=$totalrooms+1;
      $deluxerooms=$deluxerooms+1;
      if ($roomtype=='single') {
        $deluxesingle=$deluxesingle+1;
        $query="UPDATE `admin` SET `totalrooms`=$totalrooms,`deluxerooms`=$deluxerooms,`deluxesingle`=$deluxesingle WHERE id=1";
        $result=mysqli_query($conn,$query);
        if ($result) {
          $success='Room Added Successfully';
        }
         else {
    $success='There is an Internal Error';
  }
      }
      if ($roomtype=='double') {
        $deluxedouble=$deluxedouble+1;
        $query="UPDATE `admin` SET `totalrooms`=$totalrooms,`deluxerooms`=$deluxerooms,`deluxedouble`=$deluxedouble WHERE id=1";
        $result=mysqli_query($conn,$query);
        if ($result) {
          $success='Room Added Successfully';
        }
         else {
    $success='There is an Internal Error';
  }
      }
      if ($roomtype=='triple') {
        $deluxetriple=$deluxetriple+1;
        $query="UPDATE `admin` SET `totalrooms`=$totalrooms,`deluxerooms`=$deluxerooms,`deluxetriple`=$deluxetriple WHERE id=1";
        $result=mysqli_query($conn,$query);
        if ($result) {
          $success='Room Added Successfully';
        }
         else {
    $success='There is an Internal Error';
  }
      }
    }
    // $success='Room Added Successfully';
    // header('location:addroom.php');
  }
  // else {
  //   $success='There is an Internal Error';
  // }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add rooms</title>
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <style type="text/css">
    .body {
      background-image: url("img/y4.jpg");
      background-color: #cccccc;
      background-repeat: no-repeat;
      background-size: cover;
    }
    #h5 {
      text-align: center;
      text-shadow: #808080;
      color: black;
      margin-top: 5PX;
      margin-right: 0px;
    }
    #form {
      background: rgba(255, 255, 255, 0.2);
      color: #black;
      text-align: left;
      height: 460px;
      margin-top: 50px;
    }
  </style>
</head>
<body class="body">
  <br>
  <a href="index.php"><h1 style="margin-left:20px;"><<</h1></a>
  <div class="container">
    <div  align="center">
      <?php if ($success!='') {
        echo "<div>
             <div class='alert alert-success' role='alert'>";
          echo $success;
          $success='';
          echo "</div>
      </div>";
      } ?>
      <!-- <div class="row" align="center"> -->
      <!-- <div class="col-sm-5" id="form" style="margin-right: 5px;">
        <br>

        <h5 id="h5">Add New Room</h5>

        <form method="post" action="addroom.php">
          <?php
          // include('error.php');
          ?>
          <label for="">Accomudation Type</label>
          <select class="custom-select" name="accomodation">
            <option selected value="null">Select One</option>
            <option value="classic">Classic</option>
            <option value="standard">Standard</option>
            <option value="deluxe">Deluxe</option>
          </select>
          <br>
          <br>
          <label for="">Room Type</label>
          <select class="custom-select" name="type">
            <option selected value="null">Select One</option>
            <option value="single">Single</option>
            <option value="double">Double</option>
            <option value="triple">Triple</option>
          </select>
          <br>
          <br>
          <div class="form-group">
            <label for="price">Room Price</label>
            <input type="number" class="form-control" name="price" id="price" aria-describedby="emailHelp" placeholder="Enter Price">
          </div>
          <br>
          <br>
          <button type="submit" name="addroom" class="btn btn-primary btn-lg btn-block">Add Room</button>
        </form>
      </div> -->
      <div class="col-sm-5" id="form">
        <br>

        <h5 id="h5">Add New Room</h5>

        <form method="post" action="addroom.php">
          <?php
          // include('error.php');
          ?>
          <label for="">Accomodation Type</label>
          <select class="custom-select" name="accomodation">
            <option selected value="null">Select One</option>
            <option value="classic">Classic</option>
            <option value="standard">Standard</option>
            <option value="deluxe">Deluxe</option>
          </select>
          <br>
          <br>
          <label for="">Room Type</label>
          <select class="custom-select" name="type">
            <option selected value="null">Select One</option>
            <option value="single">Single</option>
            <option value="double">Double</option>
            <option value="triple">Triple</option>
          </select>
          <br>
          <br>
          <div class="form-group">
            <label for="price">Room Price</label>
            <input type="number" class="form-control" name="price" id="price" aria-describedby="emailHelp" placeholder="Enter Price">
          </div>
          <br>
          <br>
          <button type="submit" name="addroom" class="btn btn-primary btn-lg btn-block">Add Room</button>
        </form>
      </div>
      <!-- </div> -->
    </div>
</body>

</html>
