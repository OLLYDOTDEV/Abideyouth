<?php // credit for some of this must go to Google
// based of https://developers.google.com/calendar/quickstart/php and the Google Calendar API


// Summary: This is a php file that
// counts the amount of upcomming events
// and then writes it to a file called Eventcount.txt











require __DIR__ . '/google-api-php-client-2.2.3/vendor/autoload.php';
// THIS PART IS ONLY NEED FOR THE FIRST PART TO AUTHORIZED
/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Google Calendar API PHP Quickstart');
    $client->setScopes(Google_Service_Calendar::CALENDAR);
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

// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Calendar($client);

//edited code from here
$today = new DateTime();
$today = $today->format("Y-m-d\TH:i:sP");

$optParams = array(

  'orderBy' => 'startTime',
  'singleEvents' => true ,
  'timeMin' => $today

);
$calendarId = 'obp9kq9paqjlu8fmshl3pb3ct8@group.calendar.google.com'; // Unity youth $calendarId
$events = $service->events->listEvents($calendarId, $optParams);
$count = sizeof($events);// get amout of events
$GLOBALS["count"] = $count;



$eventsfile = "/var/www/html/ptable.xyz/calender/Eventcount.txt";
$eventsfileLink = fopen($eventsfile, 'w+') or die("Can't open file.");

fwrite($eventsfileLink, print_r($count, TRUE));
fclose($eventsfileLink);
?>
