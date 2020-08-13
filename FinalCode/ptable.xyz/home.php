<!doctype html>
<?php // Homepage for Abide youth
session_start();

error_reporting('none');
$_SESSION['URL'] = $_SERVER['REQUEST_URI'];
?>

<html lang="en">
    <head>
        <title>Home</title>
        <meta name="Description" content="Abide Youth">
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
          /*fonts*/
      .active{
        /*Futura Bold*/

        font-family: futura-pt-bold, sans-serif;
        font-weight: 900;
        font-style: normal;
      }
      .Font-FuturaMedium{
        /*Futura Medium*/

        font-family: futura-pt, sans-serif;
        font-weight: 500;
        font-style: normal;
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
      	background:url("assets/homevideo.gif");
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
        background:url("assets/img/backgrounds/calenderinfobacking.jpg");
        background-size: cover;
         background-repeat: no-repeat;
              object-fit: cover;

      }
      .Navbacking{  /**/
         z-index: -1;
      	background:url("assets/img/backgrounds/Navfallback.jpg");
      	background-size: cover;
         background-repeat: no-repeat;
        /*background-size: cover; with @Media{}*/
        width:100%;
      	height: 100vh;
        max-height:100%;
        object-fit: cover;
        z-index: -1;
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
            .dropdown-content a:hover {background-color:rgba(0,0,0,0.23) }
            .dropdownpad{
              padding-right: 100px;
            }
      @media only screen and (max-width: 1000px){
        .Middlehome{
              background-color: #FEFBEF ;
              height: auto;
              grid-auto-rows: 1000px;
              width: 100%;
              display: grid;
              grid-gap: 2vh;
              grid-template-columns: 1fr;

              grid-auto-rows: fit-content(600px);
              grid-template-areas:
              "P"
              "C"
              "A"
              "V"
              "S";
              word-wrap: break-word;
            }
      }

      @media screen and (min-width: 1000px) {


            .Middlehome{

              background-color: #FEFBEF ;
                height: auto;
                min-height: 580px;
                width: 100%;
                display: grid;
                grid-gap: 2px;
                grid-template-columns:4vw 1fr 1fr 1fr 1fr 1fr 5.1vw 1fr 1fr 1fr 4vw ;
                grid-template-rows:  6vw 25vw .56vh 26vw 26.3vw 6vw;
                grid-template-areas:
                ". . . . . . . . . . ." /* fit-content(300px);lays out the shape for middle of the home page where the info is going*/
                ". P P P P P . A A A ."
                ". . . . . . . A A A ."
                ". C C C C C . V V V ."
                ". C C C C C . S S S ."
                ". . . . . . . . . . ."
                ;
              /*
              P = AboutHomeParagraph
              A = AboutHomeyouthBrief
              C = Calendarupcominghomeevents
              V = Vidoeshome
              S = Socialmedia
            */

                word-wrap: break-word;
              }
            }
            .eventtitle{
              margin-top: 10.1vh;
              margin-bottom: 5vh;
              font-family: bebas-neue, sans-serif;
              font-weight: 700;
              font-style: normal;
              color:red;
            }
            .eventtext{
              font-family: bebas-neue, sans-serif;
              font-weight: 100;
              font-style: normal;
              font-size: 1em;
              color:white;

            }
            /*buttons*/
            .CalendarFont-BebasNeue Middlehomebuttons:hover{
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
           .CalendarFont-BebasNeue Middlehomebuttons{
             height:5.9vh;
             width:10vw;
             max-width: 129px;
             max-height: 53px;
             text-align: center;
               border: 1.8px solid rgb(34, 34, 34);
               background-color: #FEFBEF;
               font-size: 1vh;
               margin-bottom: 18px;

           }
           .Font-BebasNeue Middlehomebuttons:hover{
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
           .Font-BebasNeue Middlehomebuttons{
             height:5.9vh;
             width:10vw;
             max-width: 129px;
             max-height: 53px;
             text-align: center;
               border: 1.8px solid rgb(34, 34, 34);
               background-color: #FEFBEF;
               font-size: 1vh;
               margin-bottom: 18px;
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

    </style>
</head>
<body>
              <div>
                <div class="imgone" data-stellar-background-ratio=".1">
                  <?php
                require __DIR__ .'/assets/Connection/navcontroler.php';
                  NavigationbarHome();
                   ?>
                   <center class="videolinkspace">
                       <h3 class="videolinktext Font-BebasNeue"><a  href="www.myvideohost.net/abideyouthrocks">Click Here for Full Video</a></h3>
                   </center>
                 </div>
    <div class="Middlehome">

      <div class="AboutHomeParagraph">

      <table>
        <tr>
          <td class="AboutHomeParagraphtitle Font-BebasNeue">About</td>
        </tr>
        <tr>
          <td><span class="AboutHomeParagraphtext Font_DollyPro">
            lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took
            a galley of type and scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
             popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
             recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></td>
        <tr>
      </table>

      </div>
      <div class="AboutHomeyouthBrief">
          <div class="Navmiddle">
            <h6 class=" Navmiddle Font-BebasNeue">Navigate the website</h6>
          </div>
      <div class="AboutHomeyouthBrieftitle Font-BebasNeue">About Abide page</div>
      <div class="AboutHomeyouthBrieftext Font_DollyPro">
        lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
        been the industry's standard dummy text ever since the 1500s, when an unknown printer took
        a galley of type and scrambled it to make a type specimen book
      </div>
      <div class="middlebuttonconcontainer">
        <a href="about">
          <button  class="Font-BebasNeue Middlehomebuttons" >
            <h2 style="margin:0px;;">See More<h2/>
          </button>
        </a>
      </div>
      </div>
      <div class="videohome">
        <div class="Vidoehometitle Font-BebasNeue">Abide video/pics</div>
         <div class="Vidoehometext Font_DollyPro">
            lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took
            a galley of type and scrambled it to make a type specimen book
         </div>
            <div class="middlebuttonconcontainer">
              <a href="gallery">
                <button class="Font-BebasNeue Font-BebasNeue Middlehomebuttons" >
                  <h2 style="margin:0px;;">See More<h2/>
                </button>
              </a>
            </div>
      </div>
        <div class="SocialMediaHome">
          <div class="SocialMediaHometitle Font-BebasNeue">Social Media</div>
           <div class="SocialMediaHometext Font_DollyPro">
              lorem lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
              been the industry's standard dummy text ever since the 1500s, when an unknown printer took
              a galley of type and scrambled it to make a type specimen book
           </div>
              <div class="middlebuttonconcontainer">
                <a href="https://www.instagram.com">
                  <button class="Font-BebasNeue Middlehomebuttons" >
                    <h2 style="margin:0px;">See More<h2/>
                  </button>
                </a>
              </div>
        </div>
        <div class="Calendarupcominghomeevents">
          <div class="Calendarupcominghomeeventstitle Font-BebasNeue">Upcoming Events</div>
           <div class="Calendarupcominghomeeventstext Font_DollyPro">
              lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
              been the industry's standard dummy text ever since the 1500s, when an unknown printer took
              a galley of type and scrambled it to make a type specimen book
           </div>

           <div class="Calendarupcominghomeeventsimg">
             <?php
                      require 'calender/sendevents.php';
                      $File = "calender/events.txt";
                      eventclean($File)
                      ?>
           </div>
              
        </div>
    </div>
    <?php
             require __DIR__.'/assets/Footer.php';
             Footer();

             ?>
<script src="assets/jquery-2.0.2.js"></script> <!-- these lines enable parallax scrolling  -->
<script src="assets/jquery.stellar.min.js"></script>
<script>$.stellar({responsive:true});</script> <!-- ^so long as the img has the data tag of ` data-stellar-background-ratio="0.2" ` -->





</body>
</html>
