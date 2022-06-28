<?php
require 'Images.php';

  $image_varc = new Images();

  var_dump($image_varc);

  $flis_name = $image_varc->contenue();


  foreach ($flis_name as $key => $value) {

      echo "<li> <img src='E:/wamp64/www/devoire_image/image_varc/$value' alt='images en vrac'> image </li>";
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <p> <img src="E:\wamp64\www\devoire_image\image_Vrac\chat01.jpg" alt='test 666 pour ?' width="400"
     height="341"> </p>
  </body>
</html>
