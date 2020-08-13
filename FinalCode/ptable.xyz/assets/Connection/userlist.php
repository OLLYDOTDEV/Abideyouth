<?php
require 'logedcheek.php';
require 'navcontroler.php';
require '../db.php';
isadmin();
error_reporting('none');
Navigationbar();


//https://www.w3schools.com/php/php_mysql_select.asp
if ($_conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//https://www.w3schools.com/sql/sql_select.asp
//
$sql = "SELECT ID, Name, Password, Lastonline, email FROM Users ORDER BY Name ";
//https://www.w3schools.com/sql/sql_orderby.asp
$result = $_conn->query($sql);
echo"
<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
.Font-marketprobold{
  font-family: ff-market-web, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 2.7em;
  padding-left: 2vw;
  color:#1C1000;
}
.active{
  /*Futura Bold*/

font-size: 1.055em;
  font-family: futura-pt-bold, sans-serif;
  font-weight: 900;
  font-style: normal;

}
.Font-FuturaMedium{
  /*Futura Medium*/

  font-family: futura-pt, sans-serif;
  font-weight: 500;
  font-style: normal;.


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
</style>";
echo '        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.typekit.net/bvh6eke.css">
        <link rel="stylesheet" type="text/css" href="../Styles.css">';
echo "<center><table>";
echo"<tr><th>ID</th><th>UserName</th><th>Last Online</th><th>Email</th></tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["ID"] ." </td><td> " . $row["Name"]. " </td><td> " .$row["Lastonline"]." </td><td> " .$row["email"]." </td></tr> ";
    }
} else {
    echo "0 results";
}

echo "</center>
</table>";


/*
CREATE TABLE `Users`.`Users` ( `ID` INT NOT NULL AUTO_INCREMENT COMMENT 'Values can be Admin or User' , `Name` TEXT NOT NULL , `Password` TEXT NOT NULL , `Elevated_Privileges` TEXT NOT NULL , INDEX `ID` (`ID`)) ENGINE = InnoDB;

*/


?>
