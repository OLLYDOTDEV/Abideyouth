<?php
session_start();


function restrictedaccess(){ // sees if user is loged in and if user can see this webpage
 $valid=$_SESSION['valid'];
  if(!empty($valid)){



    if($valid=="TRUE"){
            //echo"<script>alert('you can now see the web page')</script>"; //for debuging

    }

  else{
      echo"<script>alert('insufficient permission to view web page')</script>";
      echo '<script>window.location.href = "/home";</script>';

    }


}else{
      echo"<script>alert('You are not Loged in')</script>";
      echo '<script>window.location.href = "/home";</script>';
    }
}


// note to self write code for working out if admin
function isadmin(){
    $Elevated_Privileges=$_SESSION['Elevated_Privileges'];
  if(!empty($Elevated_Privileges)){



    if($Elevated_Privileges=="Admin"){
            //echo"<script>alert('You have permission to manage this webpage')</script>"; //for debuging
    }

  else{
      echo"<script>alert('user has insufficient permission to view page')</script>";
      echo '<script>history.back(-1);</script>';//https://css-tricks.com/snippets/javascript/go-back-button/
    }


}else{
      echo"<script>alert('You are not Loged in')</script>";
      echo '<script>window.location.href = "abideyouth.cf"</script>';

    }
}
function Signed_in($log_in_state){  // is the user loged in used for the verify.php
if ($log_in_state =="TRUE") {
$_SESSION['Signed_in']= "TRUE";
//echo"<script>alert('$ loginstate set to TRUE')</script>";//debug

}
else{
$_SESSION['Signed_in']= "FALSE";
//echo"<script>alert('$ loginstate set to FALSE')</script>";//
}
}
?>
