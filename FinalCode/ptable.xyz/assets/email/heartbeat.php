<?php

echo exec("atrm $(atq|cut -f1)"); // remove all `at` jobs //  https://www.commandlinefu.com/commands/view/4618/remove-at-jobs
// ^^ will give error msg if no jobs found
echo exec("/var/www/html/ptable.xyz/assets/email/countcall.sh");
sleep(3); // give time for sever to update file
 $File = "/var/www/html/ptable.xyz/calender/Eventcount.txt";
 $File = File($File);
 $File = $File[0];

 if ($File == 0) {
 print_r($File);
 echo "<br>";
 // this over write the out of date event
 $eventsconstructed = array(
     'Title' => "No upcomming Events",
     'Description: ' => "currently there are no events programmed into the calendar for the foreseeable future",
     'Location' => "Over The Rainbow",
     'Date of Event' => "Never",
     'Started at' => "-",
     'EndTime' => "-");
     $eventsfile = "/var/www/html/ptable.xyz/calender/events.txt";
     $eventsfileLink = fopen($eventsfile, 'w+') or die("Can't open file.");

     fwrite($eventsfileLink, print_r($eventsconstructed, TRUE));
     fclose($eventsfileLink);
 //sets this file to check back in 1 day
     $cmd = "at now + 1 day -f /var/www/html/ptable.xyz/assets/email/heartbeatrun.sh";
     $cmd = trim(preg_replace('/\s\s+/', ' ', $cmd));
     echo "cmd formated\n";
     echo $cmd;
     echo exec($cmd);
     echo "cmd executed\nDone";

 }else{
   //updates event.txt file
   echo exec("/var/www/html/ptable.xyz/assets/email/eventscall.sh");
   //
   sleep(3); // give time for sever to update files
   $File = "/var/www/html/ptable.xyz/calender/events.txt";
   $File = File($File);
   $Title = explode("=>",$File[2]);
   $Description = explode("=>",$File[3]);
   $Location = explode("=>",$File[4]);
   $Startdate = explode("=>",$File[5]);
   $Startetime = explode("=>",$File[6]);
   $EndTime = explode("=>",$File[7]);

   $timeinfo = $Startetime[1];
   $dateinfo = $Startdate[1];


  $cmd = "at $timeinfo $dateinfo - 2 hours -f /var/www/html/ptable.xyz/assets/email/Mainrun.sh";
  $cmd = trim(preg_replace('/\s\s+/', ' ', $cmd));
  echo "cmd formated\n";
  echo $cmd;
  echo exec($cmd);
  echo "cmd executed\nDone";
 }







?>
