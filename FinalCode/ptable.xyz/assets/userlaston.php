<?php
session_start();
//error_reporting('none')
function laston() {
require '../db.php';
$lastonline = new DateTime();
$lastonline = $lastonline->format("Y-m-d");
$username = $_SESSION['username'];
$sqlupdate = "UPDATE Users SET Lastonline = '$lastonline' WHERE Name = '$username'";
if($_conn->query($sqlupdate)){

}


}
?>
