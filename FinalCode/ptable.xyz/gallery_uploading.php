<?php
session_start();
error_reporting('none');
require 'assets\db.php';
require 'assets\Connection\logedcheek.php' ;
require 'assets\Connection\navcontroler.php' ;
// for displaying images to the users


isadmin();
?>







<!DOCTYPE html>
<html>
<body>
<?php Navigationbar();
echo'
<meta name="Description" content="Abide Youth">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.typekit.net/bvh6eke.css">
<link rel="stylesheet" type="text/css" href="assets/Styles.css">

<style>
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
  .Font-marketprobold{
    font-family: ff-market-web, sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 2.7em;
    padding-left: 2vw;
    color:#1C1000;
  }
  /*navbar css*/
  .navimg {

    height:9vh; /* times to make bigger E.g  9*10 */
    width:8vw;
    min-width: 100px;
    background-size: cover;
    background-repeat: no-repeat ;
      margin-right: auto;
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
</style>

'
?>
<center>
<form style="padding-top:10Vw;"class="Font_DollyPro"action="Gallery_Uploading.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file[]" id="file" multiple>
    <button type="submit" name="submit">upload</button>
</form>
</center>
</body>
</html>






<?php
//https://makitweb.com/multiple-files-upload-at-once-with-php/

if(isset($_POST['submit'])){
    $file = $_FILES['file'];



    // Count total files
    $countfiles = count($_FILES['file']['name']);
    $folderPath = "media\pics"; // folderpath where u are uploading to // if not working double check to make sure the text to file for validating is within the folder
// initial file count
$initialscan = scandir($folderPath);
$initialFiles = count(array_slice($initialscan, 2)); // removes .. , . for the $initialscan array which is produced from a linux file system

    // Looping all files
    for($i=0;$i<$countfiles;$i++){
      $fileName = $_FILES['file']['name'][$i];
      $fileTmpName = $_FILES['file']['tmp_name'][$i];
      $fileSize = $_FILES['file']['size'][$i];
      $fileError= $_FILES['file']['error'][$i];
      $fileType = $_FILES['file']['type'][$i];





      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));


      $allowed = array('jpg','jpeg','png');

      if(in_array($fileActualExt, $allowed)){
          if ($fileError === 0){
       if($fileSize < 256000000000 ){ // this is in bits
         // upload_max_filesize = 1000M;    post_max_size = 1000M; add this to the php.ini as that you are able to upload larger files greater then 8MB

              $fileNameNew = uniqid('', true).".".$fileActualExt;
                          $filepath = 'media\pics\ '.$fileNameNew;
                          move_uploaded_file($fileTmpName, $filepath);      // if you get to here the upload worked


                                  }else{echo"Your File is to big !";}
                                }else{echo"there was a error uploading";}
                              }else{echo"This file type is not allowed";}


                            }
                            $endfiles =count(array_slice(scandir($folderPath), 2));

                            $hypotheticalnumberoffiles = $initialFiles + $countfiles  ;// this work out if the files have been all uploaded successfuly





                            if($hypotheticalnumberoffiles === $endfiles){

                            echo"<script>alert('upload successful')</script>";
                            echo '<script>window.location.href = "Gallery.php";</script>';
                          }else{echo"<script>alert('there was an error uploading one or more files') ;
                            window.open('mailto:obell154@gmail.com?Subject=File%20Upload%20Failed%20%20%20|Abide%20Youth%20Page','_blank')
                            </script>";
                          }



}
?>
