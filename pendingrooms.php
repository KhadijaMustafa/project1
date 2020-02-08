<?php 
include 'indexL.php';
include 'pendingL.php';
include 'pctotal.php';
if (!isset($_SESSION['adminemail'])) {
  header('location:adminLogin.php');
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
  <!-- Favicon-->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

  <!-- Bootstrap Core Css -->
  <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Waves Effect Css -->
  <link href="plugins/node-waves/waves.css" rel="stylesheet" />

  <!-- Animation Css -->
  <link href="plugins/animate-css/animate.css" rel="stylesheet" />

  <!-- Morris Chart Css-->
  <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

  <!-- Custom Css -->
  <link href="css/style.css" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
  <?php echo $totalrooms; ?>
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Please wait...</p>
    </div>
  </div>
  <!-- #END# Page Loader -->
  <!-- Top Bar -->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="index.html">Online Room Reservation</a>
      </div>

    </div>
  </nav>
  <!-- #Top Bar -->
  <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
      <!-- User Info -->
      <div class="user-info" style="height: 80px;">
        <div class="info-container">
          <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Khadija</div>
          <div class="email">khadija@gmail.com</div>
        </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
        <ul class="list">
          <li class="header">MAIN NAVIGATION</li>
          <li class="">
            <a href="index.php">
              <i class="material-icons">home</i>
              <span>Home</span>
            </a>
          </li>
          <li class="active" style="">
            <a href="pendingrooms.php?status=null&id=null">
              <span>Pending Rooms</span>
              <span class="" style="color:white; background-color: #0000FF; width: 20px;height: 20px; font-size: 15px; border-radius: 5px; margin-left: 70px;padding-left:5px; padding-right: 3px"><?php echo $wholeresult; ?></span>
            </a>
          </li>
          <li class="" style="">
            <a href="pTablesBookings.php?status=null&id=null">
              <span>Pending Tables</span>
              <span class="" style="color:white; background-color: #0000FF; width: 20px;height: 20px; font-size: 15px; border-radius: 5px; margin-left: 73px;padding-left:5px; padding-right: 3px"><?php echo $tablepenresult; ?></span>
            </a>
          </li>
          <li class="" style="">
            <a href="TodaysBookings.php">
              <span>Todays Room Bookings</span>
              <span class="" style="color:white; background-color: #0000FF; width: 20px;height: 20px; font-size: 15px; border-radius: 5px; margin-left: 20px;padding-left:5px; padding-right: 3px"><?php echo $todaysroombookings; ?></span>
            </a>
          </li>
          <li class="" style="">
            <a href="TodaysTablesBookings.php">
              <span>Todays Table Bookings</span>
              <span class="" style="color:white; background-color: #0000FF; width: 20px;height: 20px; font-size: 15px; border-radius: 5px; margin-left: 25px;padding-left:5px; padding-right: 3px"><?php echo $todaysTablebookings; ?></span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <span>Classic Rooms</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="classicsingle.php">Single</a>
              </li>
              <li>
                <a href="classicdouble.php">Double</a>
              </li>
              <li>
                <a href="classictriple.php">Triple</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <span>Standard Rooms</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="standardsingle.php">Single</a>
              </li>
              <li>
                <a href="standarddouble.php">Double</a>
              </li>
              <li>
                <a href="standardtriple.php">Triple</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <!-- <i class="material-icons">view_list</i> -->
              <span>Deluxe Rooms</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="deluxesingle.php">Single</a>
              </li>
              <li>
                <a href="deluxedouble.php">Double</a>
              </li>
              <li>
                <a href="deluxetriple.php">Triple </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- #Menu -->
      <!-- Footer -->
      <div class="legal">
        <div class="copyright">
          &copy; 2019 - 2020 <a href="javascript:void(0);">Online Room Reservation</a>.
        </div>
        <div class="version">
          <b>Version: </b> 1.0
        </div>
      </div>
      <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="block-header">
        <h2>DASHBOARD</h2>
      </div>
      <!-- Widgets -->
      <div class="row clearfix">
        <h5  style="margin-left:40px;">Classic rooms</h5>
        <?php
          $conn= mysqli_connect('localhost', 'root','','hotelreservation');

          $query="SELECT * FROM `bookings` WHERE status='pending' && type='classic'";
          $result= mysqli_query($conn,$query);
          echo "<table border='1' width=1020 style='margin-left:0px'>";
          echo "  <tr>
          <th width=120px>Client Name</th>
          <th width=100px>Client Email</th>
          <th width=100px>Client Phone</th>
          <th width=120px>Single Room</th>
          <th width=120px>Double Room</th>
          <th width=110px>Triple Room</th>
          <th width=100px>Check_In</th>
          <th width=100px>Check_out</th>
          <th width=65px>status</th>
          <th width=65px>Booking</th>
          <th width=65px>Cancel</th>
          </tr>";

                while($res = mysqli_fetch_assoc($result)) {
                  $clientid=$res['client_id'];
                  $queryclient1="SELECT * FROM `clientreg` WHERE client_id='$clientid'";
                  $clientexecute1=mysqli_query($conn,$queryclient1);
                  $clientresult1=mysqli_fetch_assoc($clientexecute1);
                  echo "<tr>";
                  echo "<td>".$clientresult1['fName']."</td>";
                  echo "<td>".$clientresult1['email']."</td>";
                  echo "<td>".$clientresult1['phoneNum']."</td>";
                  echo "<td>".$res['singleroom']."</td>";
                  echo "<td>".$res['doubleroom']."</td>";
                  echo "<td>".$res['tripleroom']."</td>";
                  echo "<td>".$res['checkin']."</td>";
                  echo "<td>".$res['checkout']."</td>";
                  echo "<td>".$res['status']."</td>";
                  $id1=$res['id'];
                  $status1='reserved';
                  $status11='cancel';
                  $type1="classic";
                  echo "<td width=85px><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirmModal".$id1."'>reserve</button></td>";
                  echo "<div class='modal fade' id='confirmModal".$id1."' tabindex=''-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                  echo "<div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='confirmModal".$id1."'>Confirmation</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label'Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>
                      <div class='modal-body'>
                        <h6> After clicking Confirm the following detail will be reserved".$id1.$status1."</h6>
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                        <a href='pendingrooms.php?status=".$status1."&id=".$id1."'><button type='button' class='btn btn-primary'>Confirm Booking</button></a>
                      </div>
                    </div>
                  </div>
                </div>";
                  echo "<td width=65px><button type='button' class='btn btn-danger'data-toggle='modal' data-target='#cancelModal".$id1."'>Cancel</button></td>";
                  echo "<div class='modal fade' id='cancelModal".$id1."' tabindex=''-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                  echo "<div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmation</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label'Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>
                      <div class='modal-body'>
                        <h6> After clicking Confirm the following detail will be cancelled</h6>
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                        <a href='pendingrooms.php?status=$status11&id=$id1'><button type='button' class='btn btn-primary'data-toggle='modal' data-target='#cancelModal".$id."'>Cancel Booking</button></a>
                      </div>
                    </div>
                  </div>
                </div>";
                  echo "</tr>";
                }
                echo "</table>";
                ?>

        <h5 style="margin-left:40px;">Standard Rooms</h5>
        <?php
      $query="SELECT * FROM `bookings` WHERE type='standard' && status='pending'";
      $result= mysqli_query($conn,$query);
      echo "<table border='1' width=1020px style='margin-left:0px'>";
      echo "  <tr>
      <th width=120px>Client Name</th>
      <th width=100px>Client Email</th>
      <th width=100px>Client Phone</th>
      <th width=120px>Single Room</th>
      <th width=120px>Double Room</th>
      <th width=120px>Triple Room</th>
      <th width=100px>Check_In</th>
      <th width=100px>Check_out</th>
      <th width=65px>status</th>
      <th width=65px>Booking</th>
      <th width=65px>Cancel</th>
      </tr>";

            while($res = mysqli_fetch_assoc($result)) {
              $clientid=$res['client_id'];
              $queryclient1="SELECT * FROM `clientreg` WHERE client_id='$clientid'";
              $clientexecute1=mysqli_query($conn,$queryclient1);
              $clientresult1=mysqli_fetch_assoc($clientexecute1);
              echo "<tr>";
              echo "<td>".$clientresult1['fName']."</td>";
              echo "<td>".$clientresult1['email']."</td>";
              echo "<td>".$clientresult1['phoneNum']."</td>";
              echo "<td>".$res['singleroom']."</td>";
              echo "<td>".$res['doubleroom']."</td>";
              echo "<td>".$res['tripleroom']."</td>";
              echo "<td>".$res['checkin']."</td>";
              echo "<td>".$res['checkout']."</td>";
              echo "<td>".$res['status']."</td>";
              $id2=$res['id'];
              $status2="reserved";
              $status22="cancel";
              $type2="standard";
              echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirmModal".$id2."'>reserve</button></td>";
              echo "<div class='modal fade' id='confirmModal".$id2."' tabindex=''-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo "<div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Confirmation</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label'Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body'>
                    <h6> After clicking Confirm the following detail will be reserved</h6>
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <a href='pendingrooms.php?status=$status2&id=$id2'><button type='button' class='btn btn-primary'>Confirm</button></a>
                  </div>
                </div>
              </div>
            </div>";
            echo "<td width=65px><button type='button' class='btn btn-danger'data-toggle='modal' data-target='#cancelModal".$id2."'>Cancel</button></td>";
            echo "<div class='modal fade' id='cancelModal".$id2."' tabindex=''-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
            echo "<div class='modal-dialog' role='document'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'>Confirmation</h5>
                  <button type='button' class='close' data-dismiss='modal' aria-label'Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body'>
                  <h6> After clicking Confirm the following detail will be Cancelled</h6>
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                  <a href='pendingrooms.php?status=$status22&id=$id2'><button type='button' class='btn btn-primary'data-toggle='modal' data-target='#cancelModal".$id."'>Confirm</button></a>
                </div>
              </div>
            </div>
          </div>";
          echo "</tr>";
            }
            echo "</table>";
            ?>
        <h5 style="margin-left:40px;">Deluxe Rooms</h5>
        <?php
        $query="SELECT * FROM `bookings` WHERE type='deluxe' && status='pending'";
        $result= mysqli_query($conn,$query);
        echo "<table border='1' width=1020px style='margin-left:0px' border:gray;>";
        echo "  <tr>
        <th width=120px>Client Name</th>
        <th width=100px>Client Email</th>
        <th width=100px>Client Phone</th>
        <th width=120px>Single Room</th>
        <th width=120px>Double Room</th>
        <th width=120px>Triple Room</th>
        <th width=100px>Check_In</th>
        <th width=100px>Check_out</th>
        <th width=65px>status</th>
        <th width=65px>Booking</th>
        <th width=65px>Cancel</th>
        </tr>";

              while($res = mysqli_fetch_assoc($result)) {
                $clientid=$res['client_id'];
                $queryclient1="SELECT * FROM `clientreg` WHERE client_id='$clientid'";
                $clientexecute1=mysqli_query($conn,$queryclient1);
                $clientresult1=mysqli_fetch_assoc($clientexecute1);
                echo "<tr>";
                echo "<td>".$clientresult1['fName']."</td>";
                echo "<td>".$clientresult1['email']."</td>";
                echo "<td>".$clientresult1['phoneNum']."</td>";
                echo "<td>".$res['singleroom']."</td>";
                echo "<td>".$res['doubleroom']."</td>";
                echo "<td>".$res['tripleroom']."</td>";
                echo "<td>".$res['checkin']."</td>";
                echo "<td>".$res['checkout']."</td>";
                echo "<td>".$res['status']."</td>";
                $id3=$res['id'];
                $status3="reserved";
                $status33="cancel";
                $type3="deluxe";
                echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirmModal".$id3."'>reserve</button></td>";
                echo "<div class='modal fade' id='confirmModal".$id3."' tabindex=''-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                echo "<div class='modal-dialog' role='document'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='exampleModalLabel'>Confirmation</h5>
                      <button type='button' class='close' data-dismiss='modal' aria-label'Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    <div class='modal-body'>
                      <h6> After clicking Confirm the following detail will be reserved</h6>
                    </div>
                    <div class='modal-footer'>
                      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                      <a href='pendingrooms.php?status=$status3&id=$id3'><button type='button' class='btn btn-primary'>Confirm</button></a>
                    </div>
                  </div>
                </div>
              </div>";
              echo "<td width=65px><button type='button' class='btn btn-danger'data-toggle='modal' data-target='#cancelModal".$id3."'>Cancel</button></td>";
              echo "<div class='modal fade' id='cancelModal".$id3."' tabindex=''-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo "<div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Confirmation</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label'Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body'>
                    <h6> After clicking Confirm the following detail will be Cancelled</h6>
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <a href='pendingrooms.php?status=$status33&id=$id3'><button type='button' class='btn btn-primary'data-toggle='modal' data-target='#cancelModal".$id."'>Confirm</button></a>
                  </div>
                </div>
              </div>
            </div>";
                echo "</tr>";
              }
              echo "</table>";
              ?>
        <br>
        <br>
        <br>
        <br>

      </div>
    </div>
  </section>

  <!-- Jquery Core Js -->
  <script src="plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="plugins/bootstrap/js/bootstrap.js"></script>

  <!-- Select Plugin Js -->
  <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

  <!-- Slimscroll Plugin Js -->
  <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="plugins/node-waves/waves.js"></script>

  <!-- Jquery CountTo Plugin Js -->
  <script src="plugins/jquery-countto/jquery.countTo.js"></script>

  <!-- Morris Plugin Js -->
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/morrisjs/morris.js"></script>

  <!-- ChartJs -->
  <script src="plugins/chartjs/Chart.bundle.js"></script>

  <!-- Flot Charts Plugin Js -->
  <script src="plugins/flot-charts/jquery.flot.js"></script>
  <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
  <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
  <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
  <script src="plugins/flot-charts/jquery.flot.time.js"></script>

  <!-- Sparkline Chart Plugin Js -->
  <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

  <!-- Custom Js -->
  <script src="js/admin.js"></script>
  <script src="js/pages/index.js"></script>

  <!-- Demo Js -->
  <script src="js/demo.js"></script>
</body>

</html>
