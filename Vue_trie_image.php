<?php
require "head.html";
require "menu.html";
require "Images.php";

echo "<h2>vue trie image.php </h2>";

  $image_varc = new Images();

  $flis_name = $image_varc->contenue();

echo "<p> ------------- test mes besoin ------------- </p> ";

  $test7 = "ChAt01.jpg";
  $minuscule2 = strtolower($test7);
  $qoi = explode(".",$minuscule2,2);
  var_dump($qoi);

  echo $qoi[0]."-2022-001"."." .$qoi[1]."<br/>";

  echo "<br>".$qoi[0]."</br>";


echo "<hr> <hr> ";

?>

<div class="">
  <h3> ACTION: afiche le nom des images du dosier image_Vrac </h3>

  <?php
  foreach ($flis_name as $key => $value) {

      echo "<li>" .$value. "</li>";
  }
 ?>

</div>

<div class="">

 <h3> ACTION: afiche les images  du dosier image_Vrac </h3>

   <?php
   foreach ($flis_name as $key => $value) {

       echo " <img src='image_Vrac/$value' alt='images en vrac'> $value";
   }
  ?>

</div>
