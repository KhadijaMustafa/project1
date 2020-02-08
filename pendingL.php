<?php
if ($_GET['status']=='reserved') {
  $id=$_GET['id'];
      $queryupdate="UPDATE `bookings` SET `status`='reserved' WHERE id='$id'";
      $execute=mysqli_query($conn,$queryupdate);
      if ($execute) {
            header('location:pendingrooms.php?status=null&id=null');
      }
}
if ($_GET['status']=='cancel'){
  $id=$_GET['id'];
      $queryupdate="UPDATE `bookings` SET `status`='canceled' WHERE id='$id'";
      $execute=mysqli_query($conn,$queryupdate);
      if ($execute) {
            header('location:pendingrooms.php?status=null&id=null');
      }
}
 ?>
