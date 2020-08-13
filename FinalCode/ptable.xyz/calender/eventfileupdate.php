<?php
session_start();
//error_reporting('none');
require 'aaacalenderphp.php';
// this function below is for write the event data to the events.txt
$displayamount = 1;
eventdisplay($displayamount);
//echo'Event updated';
//echo"<script>alert('Event updated');window.location.href ='/home.php';</script>";
?>
