<?php
session_start();
//error_reporting('none');
echo"

<br>
<a href=/home>Home</a>
<br>
";
require '../assets/Connection/logedcheek.php';
require 'aaacalenderphp.php' ;
restrictedaccess();
$displayamount = 100;
eventdisplay($displayamount);

?>
