<?php
session_start();
// credit for api goes to Google
// based of https://developers.google.com/calendar/quickstart/php and the Google Calendar API
require '/var/www/html/ptable.xyz/calender/google-api-php-client-2.2.3/vendor/autoload.php'; // google-api-php-client https://github.com/googleapis/google-api-php-client/blob/master/docs/install.md

// THIS PART IS ONLY NEED FOR THE FIRST PART TO AUTHORIZED
/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Google Calendar API PHP Quickstart');
    $client->setScopes(Google_Service_Calendar::CALENDAR_READONLY);
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = 'token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
}
// END OF TOP PART


// Start getting info from google calender



$client = getClient();
$service = new Google_Service_Calendar($client);

//edited code from here
$calendarId = 'obp9kq9paqjlu8fmshl3pb3ct8@group.calendar.google.com'; // Unity youth $calendarId
$eventId = '3cro2bfu70lglggknrva165l3n';
//---------------
$optParams = array(
  'orderBy' => 'startTime',
  'singleEvents' => true
);//https://groups.google.com/forum/#!topic/google-api-php-client/q_M6sj1onog
$events = $service->events->listEvents($calendarId,$optParams);//get list of all events with in the calender


$count = sizeof($events);// get amout of events
$count = $GLOBALS["count"];

/*
input values consist of
0 =to display the most recent event that will happen
1 =second " " "  "  "
etc

100 = will display all
*/








function eventdisplay($displayamount){
  if($displayamount !== 1 ){
    if($displayamount !== 2 ){
      if($displayamount !== 100){
        if($displayamount <= $GLOBALS["count"]){
         if($displayamount !== 4 ){
           if($displayamount !== 3 ){
return $error = array('Title' => "invaled input");
              }
            }
          }else{return $error = array('Title' => "greater than total amount of events");}
        }
      }
    }





        switch($displayamount) {
    case 1:
      echo "displaying 1 events/soon as coming up event";
      $i = 0;
      // set array with lates info and post to home page

      $client = getClient();
      $service = new Google_Service_Calendar($client);

      //edited code from here
      $calendarId = 'obp9kq9paqjlu8fmshl3pb3ct8@group.calendar.google.com'; // Unity youth $calendarId
      $eventId = '3cro2bfu70lglggknrva165l3n';
      //---------------
      $today = new DateTime();
      $today = $today->format("Y-m-d\TH:i:sP");


      $optParams = array(

        'orderBy' => 'startTime',
        'singleEvents' => true ,
        'timeMin' => $today

      );//https://groups.google.com/forum/#!topic/google-api-php-client/q_M6sj1onog
      $events = $service->events->listEvents($calendarId,$optParams);//get list of all events with in the calender




      // next use getid()  //pick one from a $
      // returns event ID for Google calendars latest event
      $eventid=$events[$i]->getid();// gets the id the array
      /*echo "<br>";
      echo "Event ID:";
      print_r($eventid);
      echo "<br>";
      */
      //https://mytechscraps.wordpress.com/2014/05/15/accessing-google-calendar-using-the-php-api/
      $info = $service->events->get($calendarId, $eventid); //This selects what a calendar in events to Select
      // use event id to get data,place,name etc and other meta data
      $Summary = $info->getSummary();
      $Description = $info->getDescription();//This gets the description from the selected event
      $Location = $info->getLocation();//This gets the Location from the selected event
      /*
Too add:eg if month = 1 then it will remove the one and repace it with the letter JulianToJD
      */
      $Start = $info->getStart()->getDateTime();//This gets the start time, date from the selected event
      $End = $info->getEnd()->getDateTime();//This gets the end time, date from the selected event


      //start sort
      $Startinfo = explode("T", $Start);// Splits the array in two part on the letter "T"
      $Startdate =$Startinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $StartTime = $Startinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $StartTime = explode("+", $StartTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $StartTime = $StartTime[0];
      if($StartTime[0] == 0 ){// sees if first character of the string is a 0 if so goes in to the loops
      }
      $StartTime = substr($StartTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $StartTimeNoSemicolon = str_replace(":","",$StartTime); // remove the : from the string
      echo "<br>";

      $StartTime = date('g:ia', strtotime($StartTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)
      // g https://www.php.net/manual/en/function.date.php

      //end sort
      $Endinfo = explode("T", $End);// Splits the array in two part on the letter "T"
      $Enddate =$Endinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $EndTime = $Endinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $EndTime = explode("+", $EndTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $EndTime = $EndTime[0];

      $EndTime = substr($EndTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $EndTimeNoSemicolon = str_replace(":","",$EndTime); // remove the : from the string
      echo "<br>";
      $EndTime = date('g:ia', strtotime($EndTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)


$eventsconstructed = array(
    'Title' => $Summary,
    'Description' => $Description,
    'Location' => $Location,
    'Date of Event' => $Startdate,
    'Started at' => $StartTime,
    'EndTime' => $EndTime);
    $eventsfile = "events.txt";
    $eventsfileLink = fopen($eventsfile, 'w+') or die("Can't open file.");

    fwrite($eventsfileLink, print_r($eventsconstructed, TRUE));
    fclose($eventsfileLink);


      break;
  case 2:
      echo "displaying 2 events";
      $i = 1;
      $client = getClient();
      $service = new Google_Service_Calendar($client);

      //edited code from here
      $calendarId = 'obp9kq9paqjlu8fmshl3pb3ct8@group.calendar.google.com'; // Unity youth $calendarId
      $eventId = '3cro2bfu70lglggknrva165l3n';
      //---------------
      $today = new DateTime();
      $today = $today->format("Y-m-d\TH:i:sP");


      $optParams = array(

        'orderBy' => 'startTime',
        'singleEvents' => true ,
        'timeMin' => $today

      );//https://groups.google.com/forum/#!topic/google-api-php-client/q_M6sj1onog
      $events = $service->events->listEvents($calendarId,$optParams);//get list of all events with in the calender



      // next use getid()  //pick one from a $
      // returns event ID for Google calendars latest event
      $eventid=$events[$i]->getid();// gets the id the array
      /*echo "<br>";
      echo "Event ID:";
      print_r($eventid);
      echo "<br>";
      */
      //https://mytechscraps.wordpress.com/2014/05/15/accessing-google-calendar-using-the-php-api/
      $info = $service->events->get($calendarId, $eventid); //This selects what a calendar in events to Select
      // use event id to get data,place,name etc and other meta data
      $Summary = $info->getSummary();
      $Description = $info->getDescription();//This gets the description from the selected event
      $Location = $info->getLocation();//This gets the Location from the selected event
      $Start = $info->getStart()->getDateTime();//This gets the start time, date from the selected event
      $End = $info->getEnd()->getDateTime();//This gets the end time, date from the selected event


      //start sort
      $Startinfo = explode("T", $Start);// Splits the array in two part on the letter "T"
      $Startdate =$Startinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $StartTime = $Startinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $StartTime = explode("+", $StartTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $StartTime = $StartTime[0];
      if($StartTime[0] == 0 ){// sees if first character of the string is a 0 if so goes in to the loops
      }
      $StartTime = substr($StartTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $StartTimeNoSemicolon = str_replace(":","",$StartTime); // remove the : from the string
      echo "<br>";

      $StartTime = date('g:ia', strtotime($StartTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)
      // g https://www.php.net/manual/en/function.date.php

      //end sort
      $Endinfo = explode("T", $End);// Splits the array in two part on the letter "T"
      $Enddate =$Endinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $EndTime = $Endinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $EndTime = explode("+", $EndTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $EndTime = $EndTime[0];

      $EndTime = substr($EndTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $EndTimeNoSemicolon = str_replace(":","",$EndTime); // remove the : from the string
      echo "<br>";
      $EndTime = date('g:ia', strtotime($EndTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)


      $eventsconstructed = array(
          'Title' => $Summary,
          'Description' => $Description,
          'Location' => $Location,
          'Date of Event' => $Startdate,
          'Started at' => $StartTime,
          'EndTime' => $EndTime );;
      return($eventsconstructed);
      break;
  case 3:
      echo "displaying 3 events";
      $i = 3;
      $client = getClient();
      $service = new Google_Service_Calendar($client);

      //edited code from here
      $calendarId = 'obp9kq9paqjlu8fmshl3pb3ct8@group.calendar.google.com'; // Unity youth $calendarId
      $eventId = '3cro2bfu70lglggknrva165l3n';
      //---------------
      $today = new DateTime();
      $today = $today->format("Y-m-d\TH:i:sP");


      $optParams = array(

        'orderBy' => 'startTime',
        'singleEvents' => true ,
        'timeMin' => $today

      );//https://groups.google.com/forum/#!topic/google-api-php-client/q_M6sj1onog
      $events = $service->events->listEvents($calendarId,$optParams);//get list of all events with in the calender

      // next use getid()  //pick one from a $
      // returns event ID for Google calendars latest event
      $eventid=$events[$i]->getid();// gets the id the array
      /*echo "<br>";
      echo "Event ID:";
      print_r($eventid);
      echo "<br>";
      */
      //https://mytechscraps.wordpress.com/2014/05/15/accessing-google-calendar-using-the-php-api/
      $info = $service->events->get($calendarId, $eventid); //This selects what a calendar in events to Select
      // use event id to get data,place,name etc and other meta data
      $Summary = $info->getSummary();
      $Description = $info->getDescription();//This gets the description from the selected event
      $Location = $info->getLocation();//This gets the Location from the selected event
      $Start = $info->getStart()->getDateTime();//This gets the start time, date from the selected event
      $End = $info->getEnd()->getDateTime();//This gets the end time, date from the selected event

      //start sort
      $Startinfo = explode("T", $Start);// Splits the array in two part on the letter "T"
      $Startdate =$Startinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $StartTime = $Startinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $StartTime = explode("+", $StartTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $StartTime = $StartTime[0];
      if($StartTime[0] == 0 ){// sees if first character of the string is a 0 if so goes in to the loops
      }
      $StartTime = substr($StartTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $StartTimeNoSemicolon = str_replace(":","",$StartTime); // remove the : from the string
      echo "<br>";

      $StartTime = date('g:ia', strtotime($StartTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)
      // g https://www.php.net/manual/en/function.date.php

      //end sort
      $Endinfo = explode("T", $End);// Splits the array in two part on the letter "T"
      $Enddate =$Endinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $EndTime = $Endinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $EndTime = explode("+", $EndTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $EndTime = $EndTime[0];

      $EndTime = substr($EndTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $EndTimeNoSemicolon = str_replace(":","",$EndTime); // remove the : from the string
      echo "<br>";
      $EndTime = date('g:ia', strtotime($EndTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)


      $eventsconstructed = array(
          'Title' => $Summary,
          'Description' => $Description,
          'Location' => $Location,
          'Date of Event' => $Startdate,
          'Started at' => $StartTime,
          'EndTime' => $EndTime );;
      return($eventsconstructed);
      break;
  case 4:
      echo "displaying 4 events";
      $i = 4;
      $client = getClient();
      $service = new Google_Service_Calendar($client);

      //edited code from here
      $calendarId = 'obp9kq9paqjlu8fmshl3pb3ct8@group.calendar.google.com'; // Unity youth $calendarId
      $eventId = '3cro2bfu70lglggknrva165l3n';
      //---------------
      $today = new DateTime();
      $today = $today->format("Y-m-d\TH:i:sP");


      $optParams = array(

        'orderBy' => 'startTime',
        'singleEvents' => true ,
        'timeMin' => $today

      );//https://groups.google.com/forum/#!topic/google-api-php-client/q_M6sj1onog
      $events = $service->events->listEvents($calendarId,$optParams);//get list of all events with in the calender






      // next use getid()  //pick one from a $
      // returns event ID for Google calendars latest event
      $eventid=$events[$i]->getid();// gets the id the array
      /*echo "<br>";
      echo "Event ID:";
      print_r($eventid);
      echo "<br>";
      */
      //https://mytechscraps.wordpress.com/2014/05/15/accessing-google-calendar-using-the-php-api/
      $info = $service->events->get($calendarId, $eventid); //This selects what a calendar in events to Select
      // use event id to get data,place,name etc and other meta data
      $Summary = $info->getSummary();
      $Description = $info->getDescription();//This gets the description from the selected event
      $Location = $info->getLocation();//This gets the Location from the selected event
      $Start = $info->getStart()->getDateTime();//This gets the start time, date from the selected event
      $End = $info->getEnd()->getDateTime();//This gets the end time, date from the selected event


      //start sort
      $Startinfo = explode("T", $Start);// Splits the array in two part on the letter "T"
      $Startdate =$Startinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $StartTime = $Startinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $StartTime = explode("+", $StartTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $StartTime = $StartTime[0];
      if($StartTime[0] == 0 ){// sees if first character of the string is a 0 if so goes in to the loops
      }
      $StartTime = substr($StartTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $StartTimeNoSemicolon = str_replace(":","",$StartTime); // remove the : from the string
      echo "<br>";

      $StartTime = date('g:ia', strtotime($StartTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)
      // g https://www.php.net/manual/en/function.date.php

      //end sort
      $Endinfo = explode("T", $End);// Splits the array in two part on the letter "T"
      $Enddate =$Endinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $EndTime = $Endinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $EndTime = explode("+", $EndTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $EndTime = $EndTime[0];

      $EndTime = substr($EndTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $EndTimeNoSemicolon = str_replace(":","",$EndTime); // remove the : from the string
      echo "<br>";
      $EndTime = date('g:ia', strtotime($EndTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)


      $eventsconstructed = array(
          'Title' => $Summary,
          'Description' => $Description,
          'Location' => $Location,
          'Date of Event' => $Startdate,
          'Started at' => $StartTime,
          'EndTime' => $EndTime );;
      return($eventsconstructed);
      break;
  case 100:
      echo "displaying all events";
      $i = 0;

      // set array with lates info and post to home page

      $client = getClient();
      $service = new Google_Service_Calendar($client);

      //edited code from here
      $calendarId = 'obp9kq9paqjlu8fmshl3pb3ct8@group.calendar.google.com'; // Unity youth $calendarId
      $eventId = '3cro2bfu70lglggknrva165l3n';
      //---------------


      $today = new DateTime();
      $today = $today->format("Y-m-d\TH:i:sP");


      $optParams = array(

        'orderBy' => 'startTime',
        'singleEvents' => true ,
        'timeMin' => $today

      );//https://groups.google.com/forum/#!topic/google-api-php-client/q_M6sj1onog
      $events = $service->events->listEvents($calendarId,$optParams);//get list of all events with in the calender







      // next use getid()  //pick one from a $
      // returns event ID for Google calendars latest event
      $i = 0;
      while($i < $count) { //look at each of the keys within the array
      $eventid=$events[$i]->getid();// gets the id the array
      /*echo "<br>";
      echo "Event ID:";
      print_r($eventid);
      echo "<br>";
      */
      //https://mytechscraps.wordpress.com/2014/05/15/accessing-google-calendar-using-the-php-api/
      $info = $service->events->get($calendarId, $eventid); //This selects what a calendar in events to Select
      // use event id to get data,place,name etc and other meta data
      $Summary = $info->getSummary();
      $Description = $info->getDescription();//This gets the description from the selected event
      $Location = $info->getLocation();//This gets the Location from the selected event
      $Start = $info->getStart()->getDateTime();//This gets the start time, date from the selected event
      $End = $info->getEnd()->getDateTime();//This gets the end time, date from the selected event


      //start sort
      $Startinfo = explode("T", $Start);// Splits the array in two part on the letter "T"
      $Startdate =$Startinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $StartTime = $Startinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $StartTime = explode("+", $StartTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $StartTime = $StartTime[0];
      if($StartTime[0] == 0 ){// sees if first character of the string is a 0 if so goes in to the loops
      }
      $StartTime = substr($StartTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $StartTimeNoSemicolon = str_replace(":","",$StartTime); // remove the : from the string
      echo "<br>";

      $StartTime = date('g:ia', strtotime($StartTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)
      // g https://www.php.net/manual/en/function.date.php

      //end sort
      $Endinfo = explode("T", $End);// Splits the array in two part on the letter "T"
      $Enddate =$Endinfo[0];//take the first part of the Splits parent array and appends it do a $Startdate Varible
      $EndTime = $Endinfo[1];//take the secend part of the Splits parent array and appends it do a $StartTime Varible
      $EndTime = explode("+", $EndTime); // explodes the Time Varble on the "+" to remove the +gmt 13 from the array
      $EndTime = $EndTime[0];

      $EndTime = substr($EndTime, 0 , -3); // remove the last 3 characters e.g` :00 `

      $EndTimeNoSemicolon = str_replace(":","",$EndTime); // remove the : from the string
      echo "<br>";
      $EndTime = date('g:ia', strtotime($EndTimeNoSemicolon)); // convters the 24hour time to digital time (am,pm)


      echo "<br>";
      echo "<br>";
      echo "Title: ";
      print_r($Summary);
      echo "<br>";
      echo "Description: ";
      print_r($Description);
      echo("<br>");
      echo "Location: ";
      print_r($Location);
      echo("<br>");
      echo "Date of Event: ";
      echo $Startdate;
      echo("<br>");
      echo "Started at: ";
      print_r($StartTime);
      echo("<br>");
      echo "Ends at: ";
      print_r($EndTime);
      echo("<br>");

      $i++;
      }

      break;

  default;
    echo"
    input values consist of \n
    0 =to display the most recent event that will happen \n
    1 =second event \n
    2\n
    3\n
    etc\n

    all = will display all\n
\n
    (or you may be seeing this  because there is not enough data entries into the calendar)
    ";

    break;
  }

}



?>
