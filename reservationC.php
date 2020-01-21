<?php include 'classicL.php'; ?>
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
      background-image: url("img/n8.jpg");
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
    
       }
              @media only screen and (min-width: 720px)
{
  .container
  {
    margin-left: 300px;
  }
 
}

       
</style>
</head>

<body class="body">
  <div class="container">
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
        <form method="post" action="reservationC.php" id="form">
          <br>

          <div class="form-group">
            Check_In<input type="date" id="checkindate" class="form-control" min="<?php echo date("Y-m-d") ; ?>" name="checkin" placeholder="date" required="true" style="border-radius: 7px;">
          </div>
           <div class="form-group">
          Check_out<input type="date" id="checkout" name="checkout" min="<?php echo date("Y-m-d"); ?>" class="form-control" placeholder="date" required="true" style="border-radius: 7px;">
        </div>
          <div class="form-group">
            Adult<select class="form-control" id="adult" name="adult" placeholder="No of Adult" required="true" style="border-radius: 7px;">
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


          

      </div>

      <div class="col-sm-4" id="form">
        <br>

       


        <div class="form-group">
            Children<select class="form-control" id="children" name="children" placeholder="No of child" required="true" style="border-radius: 7px;">
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
            Any Special request ?
            <textarea class="form-control" id="message11" placeholder="message" rows="4" required="true" style="border-radius: 7px;"></textarea>
          </div>

        
          <!-- <input type="submit" name="reserve" class="bn2" value="Submit"> -->
          <input type="button" name="reserve" onclick="getInputValue();" class="bn3" value="Submit"  data-toggle="modal" data-target="#exampleModalScrollable">
          <br>
          <br>
          <a href="home.php"><input type="button" class="bn3" value="Back"></a>
        

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
              <div class="modal-body" onload="getInputValue();">
                <script type="text/javascript">
                function getInputValue(){
                  var checkin = document.getElementById('checkindate').value;
                  var checkout = document.getElementById('checkout').value;
                  var children = document.getElementById('children').value;
                  var adult = document.getElementById('adult').value;
                 var message = document.getElementById('message11').value;
                 document.getElementById('checkin').innerHTML=checkin;
                 document.getElementById('checkoutdate').innerHTML=checkout;
                 document.getElementById('children1').innerHTML=children;
                 document.getElementById('adult1').innerHTML=adult;
                 document.getElementById('message1').innerHTML=message;


              }
                </script>
                <h6 style="color:gray">Check_In Date</h6>
                <h6 id="checkin"></h6>
                <hr size="30">
                <!-- <br> -->
                <h6 style="color:gray">Check_Out Date</h6>
                <h6 id="checkoutdate"></h6>
                <hr size="30">
                <!-- <br> -->
                <h6 style="color:gray">Children</h6>
                <h6 id="children1"></h6>
                <hr size="30">
                <!-- <br> -->
                <h6 style="color:gray">Adult</h6>
                <h6 id="adult1"></h6>
                <hr size="30">
                <!-- <br> -->
                <h6 style="color:gray">Message</h6>
                <h6 id="message1"></h6>
                <hr size="30">
                 <?php
                 // echo "<br>";
                echo "<h6 style='color:gray'>Single Rooms</h6>";
                echo $singleroom;
                echo "<hr size='30'>";
                echo "<h6 style='color:gray'>Double Rooms</h6>";
                echo $doubleroom;
                echo "<hr size='30'>";
                echo "<h6 style='color:gray'>Triple Rooms</h6>";
                echo $tripleroom;
                echo "<hr size='30'>";
                   ?>
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
