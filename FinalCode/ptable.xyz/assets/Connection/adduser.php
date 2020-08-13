<!DOCTYPE html>
<?php
require 'logedcheek.php';
//error_reporting('none');
//isadmin();

require 'navcontroler.php';
 require '../db.php';
Navigationbar();
echo '        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.typekit.net/bvh6eke.css">
        <link rel="stylesheet" type="text/css" href="../Styles.css">';
echo"

<style>
.Font-FuturaMedium{
  /*Futura Medium*/

  font-family: futura-pt, sans-serif;
  font-weight: 500;
  font-style: normal;
  font-size: 1.9em;


}
.Font-marketprobold{
  font-family: ff-market-web, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 2.7em;
  padding-left: 2vw;
  color:#1C1000;
}
.Font-lables{
  /*Futura Medium*/

  font-family: futura-pt, sans-serif;
  font-weight: 500;
  font-style: normal;
  font-size: .7em;
}
.Font-BebasNeue{
  /*Bebas Neue*/
  font-family: bebas-neue, sans-serif;
  font-weight: 400;
  font-style: normal;
}
.Font_DollyPro{
  /*Dolly Pro*/
  font-family: dolly-new, sans-serif;
  font-weight: 400;
  font-style: normal;
}
.Font-DollyBold{
  /*Dolly Bold*/
  font-family: dolly-new, sans-serif;
  font-weight: 700;
  font-style: normal;
}
      .dropdown { /* aligns subeletments horzintly */
        position: relative;
        display: inline-block;
      }
      .dropdown-content { /* hides items */
        display: none;


        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .dropdown:hover .dropdown-content {
        display: block;
        min-width: 160px;
      }
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .dropdown-content a:hover {background-color:rgba(0,0,0,0.23) }
      .dropdownpad{
        padding-right: 100px;
      }
      .nav{
        margin-left:auto;
      }
      /*W3 school login box https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_popup_form*/

      .form-popup {
        display: none;
        z-index: 9;

      }

      /* Add styles to the form container */
      .form-container {
        width: 100%;
        padding: 10px;
        background-color:rgba(0,0,0,0.23);

      }

      /* Full-width input fields */
      .form-container input[type=text], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
      }

      /* When the inputs get focus, do something */
      .form-container input[type=text]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }

      /* Set a style for the submit/login button */
      .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
        font-family: bebas-neue, sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 1em;
      }
      .Middlehomebuttons:hover{
        height:5.9vh;
        width:10vw;
        max-width: 129px;
        max-height: 53px;
        text-align: center;
          border: 1.8px solid rgb(34, 34, 34);
          font-size: 1vh;
          margin-bottom: 18px;
          background-color:rgb(34, 34, 34);
          color:#FEFBEF;

      }
      /* add user https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_inline_form*/
      .form-inline {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .form-inline label {
        margin: 5px 10px 5px 0;
      }

      .form-inline input {
        vertical-align: middle;
        margin: 5px 10px 5px 0;
        padding: 10px;
        background-color: #fff;
        border: 1.4px solid black;

      }

      .form-inline button {
        padding: 10px 20px;
        background-color: dodgerblue;
        border: 1px solid #ddd;
        color: white;
        cursor: pointer;
      }

      .form-inline button:hover {
        background-color: royalblue;
      }

      @media (max-width: 800px) {
        .form-inline input {
          margin: 10px 0;
        }

        .form-inline {
          flex-direction: column;
          align-items: stretch;
        }
      }
      </style>"
      ;

echo '
<html>
<head>
 <title>Form site</title>
</head>
<body>
<center>
<form class="Font-lables form-inline" method="post" action="adduser.php">
<h4>Sign Up</h4>
<h6 style="font-size:.6em; margin:0px;">For Abide youth database</h6>
<br>
<div>
 <label for="username">Enter Your name</label>
  <input required type="text" name="username"placeholder="Joe">
  </div>
<br>
<div>
  <label for="email">Enter Your Email</label>
 <input required type="email" name="email"placeholder="JoeBloggsrocks@gmail.com" >
 </div>
<br>
<div>
   <label for="password" >Enter Password</h6>
  <input required type="password" name="password"placeholder="*********">
</div>
<br>
<div>
   <label for="confirm">Confirm password</h6>
  <input required type="password" name="confirm" placeholder="*********">
</div>
<br>
  <input type="submit" value="Submit">

</form>
</center>
</body>
</html>
';
//http://kunststube.net/escapism/
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

  $username = $_POST['username'];
  $username = $mysqli->real_escape_string($username);//Remove dangerous SQL characters $mysqli->real_escape_string($username) is Very differnt from $mysql_real_escape_string() // https://www.php.net/manual/en/mysqli.real-escape-string.php // http://kunststube.net/escapism/
  $username = filter_var($username, FILTER_SANITIZE_STRING);//Remove dangerous HTML charactersD

  $Email = $_POST['email'];
  $Email = filter_var($Email, FILTER_SANITIZE_EMAIL);//Remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[].
  $Email =  $Email = $mysqli->real_escape_string($Email);
  $Email = strtolower($Email);

  $password = $_POST['password'];
  // compare passwords!!
  $Confirm = $_POST['confirm'];

//https://tecadmin.net/get-current-date-and-time-in-php/
 $lastonline = new DateTime();
 $datejoined = new DateTime();
 $lastonline = $lastonline->format("Y-m-d");
 $datejoined = $datejoined->format("Y-m-d");


$list_of_emails =  array(); //this will later be used for storing the emails in a format that can be searched
$Email_sql = "SELECT email FROM Users";
$Email_result = $_conn->query($Email_sql);
if ($Email_result->num_rows > 0) {
 while($Email_list = $Email_result->fetch_assoc()) {
 foreach ($Email_list as $key) {
     array_push($list_of_emails,$Email_list["email"]);
  }
 }
}





if(in_array($Email ,$list_of_emails)){ //https://www.php.net/manual/en/function.array-search.php && https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_array_search
echo"<br><center class='Font-lables'>An account with this email is already in use!<center";
die();
}else {

}








if(!empty($username)){

 $options = ['cost' => 15];
$passwordmd = password_hash("$password", PASSWORD_BCRYPT, $options); // Hashing the password
if (mysqli_connect_error()){// Check connection
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
  $sql = "INSERT INTO Users (Name, password , Elevated_Privileges, DateJoined , Lastonline, email)
  values ('$username','$passwordmd', 'User', '$datejoined', '$lastonline', '$Email')";
  if ($_conn->query($sql)){
echo "<br><center class='Font-lables' >".$username."<br>Was inserted sucessfully to Abide Youth User database</center><br><br><br>";
}
else{
echo "Error: ". $sql ." ". $_conn->error;
}


$_conn->close();
$mysqli->close();

}
}

// CREATE TABLE `Users`.`Users` ( `ID` INT NOT NULL AUTO_INCREMENT , `Name` TEXT NOT NULL , `Password` TEXT NOT NULL , `Elevated_Privileges` TEXT NOT NULL COMMENT 'Values can be Admin or User' ,`DateJoined` date NOT NULL,`Lastonline` Date NOT NULL,`email` TEXT NOT NULL, INDEX `ID` (`ID`)) ENGINE = InnoDB;

?>
