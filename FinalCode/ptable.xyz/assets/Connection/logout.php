<?php
    session_start();
error_reporting('none');
$log_in_state = $_SESSION['Signed_in'];


if ($log_in_state=="TRUE") { // see he user in allready loged in
  $_SESSION = array();

  session_destroy();

      echo"<script>alert('You are now logged out please feel free to continue browsing')</script>";

  echo '<script>window.location.href = "/";</script>';

}else {

echo"<script>alert('could not log out user was not logged in')</script>";
echo '<script>window.location.href = "/";</script>';



  }
?>
