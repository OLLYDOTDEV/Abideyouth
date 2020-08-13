<!doctype html>
<?php // Homepage for Abide youth
session_start();

//error_reporting('none');
$_SESSION['URL'] = $_SERVER['REQUEST_URI'];
?>

<html>
    <head>
        <title>Home</title>
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
      html , body{

      	height:100%;

      }
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
      	background:url("assets/test.gif");
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
        background:url("assets/img/Homepage/calenderinfobacking.jpg");
        background-size: cover;
         background-repeat: no-repeat;
              object-fit: cover;

      }
      .Navbacking{  /**/
         z-index: -1;
      	background:url("assets/img/Homepage/Navfallback.jpg");
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
      	background:url("assets/img/Homepage/Middle_To_Footer.jpg");
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

    </style>


</head>
<body>
              <div>
                <div class="imgone"data-stellar-background-ratio=".1">
                  <?php
                require __DIR__ .'/assets/Connection/Navcontroler.php';
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
          <button class="Middlehomebuttons" >
            <h2>See More<h2/>
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
                <button class="Middlehomebuttons" >
                  <h2>See More<h2/>
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
                  <button class="Middlehomebuttons" >
                    <h2>See More<h2/>
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
              <div class="Calendarmiddlebuttonconcontainer" >
                <a href="calender/eventfileupdate">
                  <button class="Calendarmiddlehomebuttons">
                    <h2>Update Info<h2/>
                  </button>
                </a>
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
