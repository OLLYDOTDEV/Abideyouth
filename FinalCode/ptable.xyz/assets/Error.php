<!DOCTYPE HTML>
<html>
<head>
  <title>OOPS...</title>
  <link rel="stylesheet" type="text/css" href="\assets\Styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.typekit.net/bvh6eke.css">

  <style>
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
  .Opps{
      /*Futura Bold*/
      font-family: bebas-neue, sans-serif;
      font-weight: 800;
      font-style: normal;
      padding-top: 7vw;

  }
  .main404text{
    font-family: dolly-new, sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size:.57em;
    color: #707070;
    padding-bottom: 10vw;
  }
  /*top left font*/
  .Font-marketprobold{
    font-family: ff-market-web, sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 2.7em;
    padding-left: 2vw;
    color:#1C1000;
  }
      /*fonts*/
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
    font-style: normal;
    font-size: 1.9em;


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



  /*other imgs */

  .navimg {

    height:9vh; /* times to make bigger E.g  9*10 */
    width:8vw;
    min-width: 100px;
    background-size: cover;
    background-repeat: no-repeat ;
      margin-right: auto;
  }
  .imgone{  /**/
    background:url("assets/test.gif");
    background-size: cover;
     background-repeat: no-repeat;
    /*background-size: cover; with @Media{}*/
    width:100%;
    height: 100vh;
    max-height:100%;
    object-fit: cover;
  }



  /*navbar css*/


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


  /*other imgs */

  /*navbar css*/
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


  </style>
</head>
<body>
<?php
require 'Connection/navcontroler.php';
Navigationbar();
//echo"<script>window.location.href ='$url';</script>";
// This line ^^^ will redirect user to last page they were on

?>
<center>

<div class="Opps">OOPS...</div>
<div class="main404text"> <p> You clicked on a link... <br>
Your computer asked the DNS server for an IP address to go to... <br>
Your computer queried the IP address and asked for a webpage... <br>
Yet, there is no webpage here... <br>
All that work for nothing... <br>
Poor computer... You're making it do unnecessary work... <br>
(It's an error 404 if you couldn't tell)</p>
</div>

</center>

</body>
</html>
