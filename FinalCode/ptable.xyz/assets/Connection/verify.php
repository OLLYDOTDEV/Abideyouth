<?php
session_start();

require '../db.php';
require '../userlaston.php';
require 'logedcheek.php';
//error_reporting('none');
$username =$_POST['name']; // from login form-
$password =$_POST['password'];


$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

  $username = $mysqli->real_escape_string($username);//Remove dangerous SQL characters $mysqli->real_escape_string($username) is Very differnt from $mysql_real_escape_string() // https://www.php.net/manual/en/mysqli.real-escape-string.php // http://kunststube.net/escapism/
  $username = filter_var($username, FILTER_SANITIZE_STRING);//Remove dangerous HTML charactersD

$log_in_state = $_SESSION['Signed_in'];
$URL = $_SESSION['URL'];

if ($log_in_state=="TRUE") { // see if user in allready loged in
  echo"<script>alert('you were already logged in cancelling login process. Returning to previous page')</script>";
  echo '<script>window.location.href = "'.$URL.'";</script>';
}else {
//echo"<script>alert('continuing verification process')</script>";

if (!empty($username)){



// Check connection

if ($_conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
// if there was a error
}

$sql = "SELECT * FROM `Users` WHERE `Name`='$username'";
 // SQL
$result = $_conn->query($sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount > 0){

    while($row = $result->fetch_assoc()) {



      $passwordhashed = $row["Password"]  ;

        $Elevated_Privileges = $row["Elevated_Privileges"];
        $_SESSION['Elevated_Privileges'] =$Elevated_Privileges ;

    if (password_verify($password, $passwordhashed)) { //cheeks the if the password match the hash password

    $valid = "TRUE";

    $_SESSION['valid'] = $valid;
    $_SESSION['username'] = $username;

 Signed_in($valid);
   laston();

 echo '<script>window.location.href = "../../home.php";</script>';

}else {

  unset($Elevated_Privileges);//removes any past privileges
    $valid = "FALSE";

     $_SESSION['valid'] = $valid;

     Signed_in($valid);
    echo"<script>alert('Invalid Password')</script>";

    echo '<script>window.location.href = "../../home.php";</script>';

}
}
}
else {

    null:

       // echo "<script>alert('No any result found..!');</script>";

        echo "<script>alert('Invalid login')</script>";
        echo "<script>window.location.href = '../../home.php' </script>";
      }

}
else{

goto null;

}




}
/*

CREATE TABLE `Users`.`Users` ( `ID` INT NOT NULL AUTO_INCREMENT , `Name` TEXT NOT NULL , `Password` TEXT NOT NULL , `Elevated_Privileges` TEXT NOT NULL COMMENT 'Values can be Admin or User' , `DateJoined` DATE NOT NULL,`Lastonline` DATETIME NOT NULL ,`email` TEXT NOT NULL, INDEX `ID` (`ID`)) ENGINE = InnoDB


*/
$_conn->close();
?>
