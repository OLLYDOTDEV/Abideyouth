<?php
require '/var/www/html/ptable.xyz/assets/db.php';

echo exec("atrm $(atq|cut -f1)"); // remove all `at` jobs //  https://www.commandlinefu.com/commands/view/4618/remove-at-jobs
echo "All Jobs cleared \n";
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

$cmd = "at $timeinfo $dateinfo + 1 hour -f /var/www/html/ptable.xyz/assets/email/heartbeatrun.sh";
$cmd = trim(preg_replace('/\s\s+/', ' ', $cmd));
echo "cmd formated\n";
echo $cmd;
echo exec($cmd);
echo "cmd executed\nsending reminder\n";
/**
 * Based of https://github.com/PHPMailer/PHPMailer
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "EFFX32@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "sqbttmyvseheirjn";
//Set who the message is to be sent from
$mail->setFrom('norely@Abideyouth.cf', 'Abide Youth');
//Set who the message is to be sent to





$sql = "SELECT email FROM Users";
//https://www.w3schools.com/sql/sql_orderby.asp
$result = $_conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $count = 0;
    while($row = $result->fetch_assoc()) {
      foreach ($row as $count) {
        $mail->addBcc($row["email"]);
        $count++;
      }
    }
} else {

}



//$mail->addAddress('obell154@gmail.com', 'Oliver Bell');
//Set the subject line
$mail->Subject = 'Just a Friendly reminder';
//Read an HTML message body from an external file, convert referenced images to embedded,

//convert HTML into a basic plain-text alternative body






$mail->msgHTML("This is a automated reminder that a event is comming up<br><br>"."Title: ".$Title[1]."<br>"."Description: ".$Description[1]."<br>"."Location: ".$Location[1]."<br>"."Date: ".$Startdate[1]."<br>"."Time: ".$Startetime[1]." - ".$EndTime[1]);//https://www.w3schools.com/php/func_filesystem_file_get_contents.asp
//Replace the plain text body with one created manually
$mail->AltBody = '
just a reminder that event is coming up
but your email client does not support html
So check manually on.
https://abideyouth.cf/';


//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}
?>
