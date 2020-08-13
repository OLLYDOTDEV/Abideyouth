<?php
session_start();
error_reporting('none');
$_SESSION['URL'] = $_SERVER['REQUEST_URI'];


require 'assets/Connection/logedcheek.php' ;
require 'assets/number2word.php';
restrictedaccess()
?>



<!doctype html>
<html>
    <head>
        <title>Gallery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.typekit.net/bvh6eke.css">
        <link rel="stylesheet" type="text/css" href="assets/Styles.css">

<script src="https://rawgithub.com/toddmotto/echo/master/dist/echo.js"></script>


        <script src="assets/Scripts.js"></script>
        <script>
      echo.init();
        </script>
      <style type="text/css">
/* weird bug where must some css must be in the main file*/
  object-fit: cover;
      }
      html , body{

        height:100%;

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
        background:url("assets/img/backgrounds/sea.jpg");
        background-size: cover;
         background-repeat: no-repeat;
        /*background-size: cover; with @Media{}*/
        width:100%;
        height: 100vh;
        max-height:100%;
        object-fit: cover;
      }
      .Calendarupcominghomeeventsimg{ /*@mobile center and expand width*/
        height: 100%;
        width:100%;
        background:url("assets/img/backgrounds/infobacking.jpg");
        background-size: cover;
         background-repeat: no-repeat;
              object-fit: cover;

      }


      .Middle2Footer{  /**/
        background:url("assets/img/backgrounds/Middle_To_Footer.jpg");
         background-repeat: no-repeat;
         background-size: cover;
        /*background-size: cover; with @Media{}*/
        width:100%;
        height: 45vh;
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
  /*pop up img*/
  .enlargeddiv{
    position: fixed !important; /* Stay in place */
    z-index: 1 !important; /* Sit on top */

    left: 0 !important;
    top: 0 !important;
    width: 100% !important; /* Full width */
    height: 100% !important; /* Full height */
    overflow: auto !important; /* Enable scroll if needed */
    background-size: cover;
    box-sizing: border-box;
    display: flex;


  }
  .cross{
    position: fixed !important; /* Stay in place */
font-size: .5em;
    right: 6.551vh !important;
    top: 6vh !important;
  display: none;
  align-self: flex-start;
  z-index: 10 !important; /* Sit on top */
color:white;
cursor: pointer;
  }
  .enlargedpic{
    /*based of https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal_img*/
    position: fixed !important; /* Stay in place */
    z-index: 1 !important; /* Sit on top */
    padding: 100px !important; /* Location of the box */
    left: 0 !important;
    top: 0 !important;
    width: 100% !important; /* Full width */
    height: 100% !important; /* Full height */
    overflow: auto !important; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.89) !important; /* Black w/ opacity */
    box-sizing: border-box;
    cursor: zoom-out;
  }
  .enlargedtext{
  height: 7.2vh;
  margin:0px;
  align-self: flex-end;
  display:none;
  color:white;
  z-index: 10 !important; /* Sit on top */
  text-align: center;
  font-size: .5em;
  cursor: zoom-out;
  font-family: dolly-new, sans-serif;
  font-weight: 100;
  font-style: normal;
  }


    </style>


    </head>
    <body id="body">

                <div class="imgone Group" data-stellar-background-ratio="0.2">
                  <?php
                require __DIR__ .'/assets/Connection/navcontroler.php';
                  NavigationbarGallery();
                   ?>
                </div>
                <h3 class="Font-BebasNeue"style="margin-bottom:0px;  padding-left: 9vh; ">Gallery</h3>
  <p class="Font_DollyPro"style="padding-left: 9vh;font-size:.5em;">Click on images to enlarge</p>
<div class="frame">
                <?php
          //      https://scrimba.com/p/pWqLHa/cBq3PsP
          //      https://www.w3schools.com/css/tryit.asp?filename=trycss_float_images_side for layout
                $folderPath = "assets/media/pics/";
                $countFile = 0;
                $totalFiles = glob($folderPath . "*");
                $picnum = 1;
                 $countFile = count($totalFiles);

//assets/img/Aboutpage/boy.png">
                $files = array_diff(scandir($folderPath), array('..', '.','.htaccess'));// removes the .. , . from linux file systems
                array_pop($files); // this is removing the last file in this folder . in this case this is the txt file which keeps the upload count at 1 or above

                foreach($files as $key){
                  $filepath= $folderPath.$key;
                  $tempnum = $picnum;
                  $picnumword = convertNumber($picnum);

                  echo "

                  <div style='cursor: zoom-in;'onclick='".$picnumword."enlarge()'id='".$picnumword."div'>
                  <img id='".$picnumword."pic' src='assets/img/blank.gif' data-echo='".$filepath."'>
                  <div id='".$picnumword."cross'class='cross'>&#10006</div>
                  <div id='".$picnumword."text'class='enlargedtext'>Click Anywhere to close</div>
                  </div>


                  ";




                 echo"
                 <script>
                 function ".$picnumword."enlarge() { //https://stackoverflow.com/questions/195951/how-to-change-an-elements-class-with-javascript
                 document.getElementById('".$picnumword."div').classList.add('enlargeddiv');
                 document.getElementById('".$picnumword."pic').classList.add('enlargedpic');
                 document.getElementById('".$picnumword."text').style.display = ('block');
                 document.getElementById('".$picnumword."cross').style.display = ('block');
                 document.getElementById('".$picnumword."div').setAttribute( 'onClick', '".$picnumword."reduce()' );
                 document.getElementById('body').style.overflow = ('hidden');
                 }
                 function ".$picnumword."reduce() { //https://stackoverflow.com/questions/195951/how-to-change-an-elements-class-with-javascript
                 document.getElementById('".$picnumword."div').classList.remove('enlargeddiv');
                 document.getElementById('".$picnumword."pic').classList.remove('enlargedpic');
                 document.getElementById('".$picnumword."text').style.display = ('none');
                 document.getElementById('".$picnumword."cross').style.display = ('none');
                 document.getElementById('body').style.overflow = ('auto');
                 document.getElementById('".$picnumword."div').setAttribute( 'onClick', '".$picnumword."enlarge()' );

                 }
                 </script>

                 ";



$picnum++;
                }
                ?>

</div>

     <script src="assets/jquery-2.0.2.js"></script>
<script src="assets/jquery.stellar.min.js"></script>
<script>
  $.stellar({responsive: true});
</script>


<?php
         require __DIR__.'/assets/Footer.php';
         Footer();

         ?>
</body>
</html>
