<!doctype html>
<?php
session_start();
error_reporting('none');
$_SESSION['URL'] = $_SERVER['REQUEST_URI'];
?>
<html lang="en">
    <head>
        <title>About</title>
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
  background:url("/assets/img/backgrounds/sea.jpg");
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
  background:url("/assets/img/backgrounds/infobacking.jpg");
  background-size: cover;
   background-repeat: no-repeat;
        object-fit: cover;

}


.Middle2Footer{  /**/
  background:url("/assets/img/backgrounds/Middle_To_Footer.jpg");
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

      /*need for about*/
      .imgtwo{
        background:url("assets/img/backgrounds/trees.jpg");
        background-size: cover;
         background-repeat: no-repeat;
      	width:100%;
      	height: 65vh;
        max-height:100%;
        object-fit: cover;
        background-color: black;
      }

      .deanna{ /*Needed to fix the css positioning of leader 2*/
position:relative;
  bottom: 4vh;
  right: -59vw;
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
    </style>


    </head>
    <body>










                <div class="imgone Group" data-stellar-background-ratio="0.2">
                  <?php
                require __DIR__ .'/assets/Connection/navcontroler.php';
                  NavigationbarAbout();
                   ?>
                </div>
                <div class="Abouttop">
              <div>
                <div class="Font_DollyPro AboutAbide">
                  <div><h2 class=" Font-BebasNeue AboutAbidetitle">About</h2></div>
                <div><h6 class="Font_DollyPro AboutAbidetext"> Aenean euismod elementum nisi quis eleifend quam. Vitae elementum curabitur vitae nunc sed velit dignissim sodales. Dis parturient montes nascetur ridiculus mus mauris vitae ultricies leo. Morbi leo urna molestie at elementum eu facilisis. Congue nisi vitae suscipit tellus mauris a. Enim lobortis scelerisque fermentum dui.Aenean euismod elementum nisi quis eleifend quam.
                </h6></div>
                </div>
              </div>
              <div class="FindUs">
                <div><h2 class=" Font-BebasNeue AboutAbidetitle">Find Us</h2></div>
                <div class="FindUsSpace"></div>
              <a href="https://www.google.co.nz/maps"><button class="Middlehomebuttons">View Map</button></a>
              </div>
            </div>
            <div class="leaderzone"><!--down flex direction-->
              <div class="leader1"><!--cross flex direction-->

                <div class="leader1left">
                </div>
                <div class="leader1right"><!--down -->
                  <div class="leader1name"><center class="Font-BebasNeue">Karl</center></div>
                  <div class="leaderspacebottom"></div>
                  <div class="Font_DollyPro leader1text" style="margin-left: 4.7vw;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo urna molestie at elementum eu facilisis sed odio morbi. Varius vel pharetra vel turpis nunc eget lorem dolor. Dignissim diam quis enim lobortis scelerisque fermentum. Libero id faucibus nisl tincidunt eget nullam. Ullamcorper velit sed ullamcorper morbi tincidunt. Ac auctor augue mauris augue neque gravida in. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Proin fermentum leo vel orci porta non. Sed elementum tempus egestas sed sed risus pretium quam vulputate. Cras sed felis eget velit aliquet sagittis. Auctor neque vitae tempus quam pellentesque nec. Vulputate odio ut enim blandit. Netus et malesuada fames ac. Pellentesque dignissim enim sit amet venenatis urna. Sociis natoque penatibus et magnis dis parturient.
                  </div>
                </div>
              </div>
              <div class="leaderspacetop"></div>
              <div class="leader2"><!--cross -->

                <div class="leader2left">
                  <div class="leader2name"><center class="Font-BebasNeue">Deanna</center></div>
                  <div class="leaderspacebottom"></div>
                  <div class="Font_DollyPro leader1text" style="margin-right: 4.7vw;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo urna molestie at elementum eu facilisis sed odio morbi. Varius vel pharetra vel turpis nunc eget lorem dolor. Dignissim diam quis enim lobortis scelerisque fermentum. Libero id faucibus nisl tincidunt eget nullam. Ullamcorper velit sed ullamcorper morbi tincidunt. Ac auctor augue mauris augue neque gravida in. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Proin fermentum leo vel orci porta non. Sed elementum tempus egestas sed sed risus pretium quam vulputate. Cras sed felis eget velit aliquet sagittis. Auctor neque vitae tempus quam pellentesque nec. Vulputate odio ut enim blandit. Netus et malesuada fames ac. Pellentesque dignissim enim sit amet venenatis urna. Sociis natoque penatibus et magnis dis parturient.
                  </div>
                </div>
                <div class="leader2right"><!--down -->
                </div>
              </div>
              <div class="leaderspacetop"></div>
                <div class="leader3"><!--cross -->
                  <div class="leader3left">
                  </div>
                  <div class="leader3right"><!--down -->
                    <div class="leader3name"><center class="Font-BebasNeue">Francesca</center></div>
                    <div class="leaderspacebottom"></div>
                    <div class="Font_DollyPro leader3text" style="margin-left: 4.7vw;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo urna molestie at elementum eu facilisis sed odio morbi. Varius vel pharetra vel turpis nunc eget lorem dolor. Dignissim diam quis enim lobortis scelerisque fermentum. Libero id faucibus nisl tincidunt eget nullam. Ullamcorper velit sed ullamcorper morbi tincidunt. Ac auctor augue mauris augue neque gravida in. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Proin fermentum leo vel orci porta non. Sed elementum tempus egestas sed sed risus pretium quam vulputate. Cras sed felis eget velit aliquet sagittis. Auctor neque vitae tempus quam pellentesque nec. Vulputate odio ut enim blandit. Netus et malesuada fames ac. Pellentesque dignissim enim sit amet venenatis urna. Sociis natoque penatibus et magnis dis parturient.
                    </div>
                  </div>
                </div>
            </div>
          <div class="leader2about"></div>
              <?php
                         require __DIR__.'/assets/Footer.php';
                         Footer();
                         ?>
            <script src="assets/jquery-2.0.2.js"></script> <!-- these lines enable parallax scrolling  -->
            <script src="assets/jquery.stellar.min.js"></script>
            <script>$.stellar({responsive:true});</script> <!-- ^so long as the img has the data tag of ` data-stellar-background-ratio="0.2" ` -->

</body>
</html>
