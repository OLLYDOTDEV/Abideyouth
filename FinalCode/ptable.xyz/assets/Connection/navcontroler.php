<?php
error_reporting('none');
session_start();
// Checks if the The users permission level
// and displays the corresponding nerve bar for that permission level


function NavigationbarHome(){ // makes function
 if($_SESSION['Signed_in'] == "FALSE" || empty($_SESSION['Signed_in'])){

   echo'
    <div class="Header">
        <img class="navimg"src="/assets/img/navbar.png"></img>
        <nav class="nav">
        <div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
        <div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
    <div class="Login dropdown"><a href=""><h3 class="Font-FuturaMedium">Login</h3></a>
      <div class="dropdown-content">
        <a onclick="LOGINGTOGGLE()" ><h3 class="Font-BebasNeue">Login</h3></a>
        <div class="form-popup" id="loginform">
           <form autocomplete="off" method="post" action="/assets/Connection/verify.php" class="form-container">
            <input class="Font_DollyPro" type="text" placeholder="Enter User Name" name="name" required>
            <input class="Font_DollyPro" type="password" placeholder="Enter Password" name="password" required>
            <button type="submit" class="btn Font-BebasNeue">Login</button>
          </form>
          </div>
          <Script>
          function LOGINGTOGGLE() { //https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_toggle_hide_show
            var x = document.getElementById("loginform");
            if (x.style.display === "block") {
              x.style.display = "none";
            } else {
              x.style.display = "block";
            }
          }
          </Script>

      </div>
    </div>
    </nav>
    </div>


';}else{


//Home nav
  $Elevated_Privileges=$_SESSION['Elevated_Privileges']; // get what privilge level the user has
  if(!empty($Elevated_Privileges)){ // if they are not login then just display the Default nav bar
    if($Elevated_Privileges=="Admin"){

echo '

<div class="Header" >
  <img class="navimg"src="/assets/img/navbar.png"></img>
    <nav class="nav">
<div ><a href="/home"><h3 class="active">Home</h3></a></div>
<div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
<div class="dropdown"><h3 class="Font-FuturaMedium">Gallery</h3>
  <div class="dropdown-content">
    <a href="/gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a>
    <a href="/gallery_Uploading"><h3 class="Font-FuturaMedium">Gallery upload site</h3></a>
  </div>
</div>
<div ><a href="/calender/eventlist.php"><h3 class="Font-FuturaMedium">Events</h3></a></div>
<div class="dropdown"><h3 class="Font-FuturaMedium">Users</h3>
  <div class="dropdown-content">
    <a href="/assets/Connection/adduser.php"><h3 class="Font-FuturaMedium">Add User</h3></a>
    <a href="/assets/Connection/userlist.php"><h3 class="Font-FuturaMedium">List User</h3></a>
  </div>
</div>
    <div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
</nav>
</div>
';

          //^Admin Navbar^
    }else{
      echo'
      <div class="Header" >
        <img class="navimg"src="/assets/img/navbar.png"></img>
          <nav class="nav">
      <div><a href="/home"><h3 class="active">Home</h3></a></div>
      <div><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>

          <div><a href="/gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a></div>
          <div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
      </nav>
      </div>
      ';
    }
}else{
echo'
<div class="Header" >
  <img class="navimg"src="/assets/img/navbar.png""></img>
    <nav class="nav">
<div class="/Home"><a href="home"><h3 class="active">Home</h3></a></div>
<div class="/About"><a href="about"><h3 class="Font-FuturaMedium">About</h3></a></div>
<div class="/Gallery "><a href="gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a></div>
<div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
</nav>
</div>
';
//^fall back Nav bar ^
}
}
}
function Navigationbarabout(){ // makes function
  if($_SESSION['Signed_in'] == "FALSE" || empty($_SESSION['Signed_in'])){

    echo'
     <div class="Header">
         <img class="navimg"src="/assets/img/navbar.png"></img>
         <nav class="nav">
         <div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
         <div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
     <div class="Login dropdown"><a href=""><h3 class="Font-FuturaMedium">Login</h3></a>
       <div class="dropdown-content">
         <a onclick="LOGINGTOGGLE()" ><h3 class="Font-BebasNeue">Login</h3></a>
         <div class="form-popup" id="loginform">
            <form autocomplete="off" method="post" action="/assets/Connection/verify.php" class="form-container">
             <input class="Font_DollyPro" type="text" placeholder="Enter User Name" name="name" required>
             <input class="Font_DollyPro" type="password" placeholder="Enter Password" name="password" required>
             <button type="submit" class="btn Font-BebasNeue">Login</button>
           </form>
           </div>
           <Script>
           function LOGINGTOGGLE() { //https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_toggle_hide_show
             var x = document.getElementById("loginform");
             if (x.style.display === "block") {
               x.style.display = "none";
             } else {
               x.style.display = "block";
             }
           }
           </Script>

     </div>
     </nav>
     </div>
     </div>

 ';}else{
//About nav
  $Elevated_Privileges=$_SESSION['Elevated_Privileges']; // get what privilge level the user has
  if(!empty($Elevated_Privileges)){ // if they are not login then just display the Default nav bar
    if($Elevated_Privileges=="Admin"){

echo '

<div class="Header" >
  <img class="navimg"src="/assets/img/navbar.png"></img>
    <nav class="nav">
<div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
<div ><a href="/about"><h3 class="active">About</h3></a></div>
<div class="dropdown"><h3 class="Font-FuturaMedium">Gallery</h3>
  <div class="dropdown-content">
    <a href="/gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a>
    <a href="/gallery_Uploading"><h3 class="Font-FuturaMedium">Gallery upload site</h3></a>
  </div>
</div>
<div ><a href="/calender/eventlist.php"><h3 class="Font-FuturaMedium">Events</h3></a></div>
<div class="dropdown"><h3 class="Font-FuturaMedium">Users</h3>
  <div class="dropdown-content">
    <a href="/assets/Connection/adduser.php"><h3 class="Font-FuturaMedium">Add User</h3></a>
    <a href="/assets/Connection/userlist.php"><h3 class="Font-FuturaMedium">List User</h3></a>
  </div>
</div>
<div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
</div>
</nav>
</div>
';


          //^Admin Navbar^
    }else{
      echo'
      <div class="Header" >
        <img class="navimg"src="/assets/img/navbar.png""></img>
          <nav class="nav">
          <div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
          <div ><a href="/about"><h3 class="active">About</h3></a></div>
      <div class="/Gallery "><a href="gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a></div>
<div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
      </div>
      </nav>
      </div>
      ';
    }
}else{
echo'
<div class="Header" >
  <img class="navimg"src="/assets/img/navbar.png""></img>
    <nav class="nav">
    <div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
    <div ><a href="/about"><h3 class="active">About</h3></a></div>
<div class="/Gallery "><a href="gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a></div>
<div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
</nav>
</div>
';
//^fall back Nav bar ^
}
}
}
function NavigationbarGallery(){ // makes function
//Gallery Nav
  $Elevated_Privileges=$_SESSION['Elevated_Privileges']; // get what privilge level the user has
  if(!empty($Elevated_Privileges)){ // if they are not login then just display the Default nav bar
    if($Elevated_Privileges=="Admin"){

echo '
<div class="Header" >
  <img class="navimg"src="/assets/img/navbar.png"></img>
    <nav class="nav">
<div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
<div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
<div class="dropdown"><h3 class="active">Gallery</h3>
  <div class="dropdown-content">
    <a href="/gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a>
    <a href="/gallery_Uploading"><h3 class="Font-FuturaMedium">Gallery upload site</h3></a>
  </div>
</div>
<div class="dropdown"><h3 class="Font-FuturaMedium">Users</h3>
  <div class="dropdown-content">
    <a href="/assets/Connection/adduser.php"><h3 class="Font-FuturaMedium">Add User</h3></a>
    <a href="/assets/Connection/userlist.php"><h3 class="Font-FuturaMedium">List User</h3></a>
  </div>
</div>
<div ><a href="/calender/eventlist.php"><h3 class="Font-FuturaMedium">Events</h3></a></div>

    <div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>

</nav>
</div>
';


          //^Admin Navbar^
    }else{
      echo'
      <div class="Header" >
        <img class="navimg"src="/assets/img/navbar.png""></img>
          <nav class="nav">
          <div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
          <div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
      <div class="/Gallery "><a href="gallery"><h3 class="active">Gallery</h3></a></div>
<div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
      </div>
      </nav>
      </div>
      ';
    }
}else{
echo'
<div class="Header" >
  <img class="navimg"src="/assets/img/navbar.png""></img>
    <nav class="nav">
    <div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
    <div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
<div class="/Gallery "><a href="gallery"><h3 class="active">Gallery</h3></a></div>
<div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
</nav>
</div>
';
//^fall back Nav bar ^
}
}

function Navigationbar(){ // makes function
  $log_in_state = $_SESSION['Signed_in'];

 if($_SESSION['Signed_in'] == "FALSE" || empty($_SESSION['Signed_in'])){
    echo'
     <div class="Header">
         <div class=" navimg Font-marketprobold">Abide</div>
         <nav class="nav">
         <div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
         <div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
     <div class="Login dropdown"><a href=""><h3 class="Font-FuturaMedium">Login</h3></a>
       <div class="dropdown-content">
         <a onclick="LOGINGTOGGLE()" ><h3 class="Font-BebasNeue">Login</h3></a>
         <div class="form-popup" id="loginform">
           <form autocomplete="off" method="post" action="/assets/Connection/verify.php" class="form-container">
             <input class="Font_DollyPro" type="text" placeholder="Enter User Name" name="name" required>
             <input class="Font_DollyPro" type="password" placeholder="Enter Password" name="password" required>
             <button type="submit" class="btn Font-BebasNeue">Login</button>
           </form>
           </div>
           <Script>
           function LOGINGTOGGLE() { //https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_toggle_hide_show
             var x = document.getElementById("loginform");
             if (x.style.display === "block") {
               x.style.display = "none";
             } else {
               x.style.display = "block";
             }
           }
           </Script>
       </div>
     </div>
     </nav>
     </div>
     </div>

 ';}else{

  $Elevated_Privileges=$_SESSION['Elevated_Privileges']; // get what privilge level the user has
  if(!empty($Elevated_Privileges)){ // if they are not login then just display the Default nav bar
    if($Elevated_Privileges=="Admin"){

echo '

<div class="Header" >
  <div class=" navimg Font-marketprobold">Abide</div>
    <nav class="nav">
<div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
<div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
<div class="dropdown"><h3 class="Font-FuturaMedium">Gallery</h3>
  <div class="dropdown-content">
    <a href="/gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a>
    <a href="/gallery_Uploading"><h3 class="Font-FuturaMedium">Gallery upload site</h3></a>
  </div>
</div>
<div class="dropdown"><h3 class="Font-FuturaMedium">Users</h3>
  <div class="dropdown-content">
    <a href="/assets/Connection/adduser.php"><h3 class="Font-FuturaMedium">Add User</h3></a>
    <a href="/assets/Connection/userlist.php"><h3 class="Font-FuturaMedium">List User</h3></a>
  </div>
</div>
<div ><a href="/calender/eventlist.php"><h3 class="Font-FuturaMedium">Events</h3></a></div>
<div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
</div>
</nav>
</div>
';


          //^Admin Navbar^
    }else{
      echo'
      <div class="Header">
        <div class="VerticalHeightControlHeader">
         <div class=" navimg Font-marketprobold">Abide</div>
          <nav class="nav">
          <div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
          <div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
      <div><a href="/Gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a></div>
<div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
      </nav>
      </div>
      </div>
      ';
    }
}else{
echo'
<div class="Header">
  <div class="VerticalHeightControlHeader">
   <div class=" navimg Font-marketprobold">Abide</div>
    <nav class="nav">
    <div ><a href="/home"><h3 class="Font-FuturaMedium">Home</h3></a></div>
    <div ><a href="/about"><h3 class="Font-FuturaMedium">About</h3></a></div>
<div><a href="/Gallery"><h3 class="Font-FuturaMedium">Gallery</h3></a></div>
<div><a href="/assets/Connection/logout"><h3 class="Font-FuturaMedium">logout</h3></a></div>
</nav>
</div>
</div>
</div>
';
//^fall back Nav bar ^
}
}
}
?>
