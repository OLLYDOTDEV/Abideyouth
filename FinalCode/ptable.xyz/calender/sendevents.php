<?php
session_start();
//this page is for reading the events.txt and sending to the requected page


function eventclean($File){
if ($_SESSION['Signed_in'] == TRUE) {
  $File = File($File);
   $Title = explode("=>",$File[2]);
   $Description = explode("=>",$File[3]);
   $Location = explode("=>",$File[4]);
   $Startdate = explode("=>",$File[5]);
   $Startetime = explode("=>",$File[6]);
   $EndTime = explode("=>",$File[7]);



 echo "<center>";
 echo "<h3 class='eventtitle'>";
 print_r($Title[1]);
 echo "</h3>";
 echo "<h6 class='eventtext'>";
 echo "Description: ";
 print_r($Description[1]);
 echo "<br>";
 echo "<br>";
 echo "Time:";
 print_r($Startetime[1]);
 echo" - ";
 print_r($EndTime[1]);
 echo "<br>";
 print_r($Location[1]);
 echo "<br>";
 echo "<br>";
 echo "Date:";
 print_r($Startdate[1]);
 echo "<br>";

 echo "</h6>";
 echo "</center>";
} else {
  $File = File($File);
   $Title = explode("=>",$File[2]);
   $Description = explode("=>",$File[3]);
   $Startdate = explode("=>",$File[5]);
   $Startetime = explode("=>",$File[6]);
   $EndTime = explode("=>",$File[7]);



 echo "<center>";
 echo "<h3 class='eventtitle'>";
 print_r($Title[1]);
 echo "</h3>";
 echo "<h6 class='eventtext'>";
 echo "Description: ";
 print_r($Description[1]);
 echo "<br>";
 echo "<br>";
 echo "Time:";
 print_r($Startetime[1]);
 echo" - ";
 print_r($EndTime[1]);
 echo "<br>";
 echo "Date:";
 print_r($Startdate[1]);
 echo "<br>";

 echo "</h6>";
 echo "</center>";
}



}



?>
