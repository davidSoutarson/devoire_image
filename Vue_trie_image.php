<?php
require 'Images.php';

  $image_varc = new Images();

  // var_dump($image_varc);

  $flis_name = $image_varc->contenue();

  foreach ($flis_name as $key => $value) {

      echo "<li> " .$value. "</li>";
  }

echo "<p> ------------------------------------ </p> ";
  $test6 = "ChameAut01.jpg";

  $long_texte = strlen($test6);

  echo '</br>' .$long_texte. '</br>';

  $nombres_de_mots = str_word_count($test6);

  echo '</br>' .$nombres_de_mots. '</br>';

  $minuscule = strtolower($test6);

  echo '</br>' .$minuscule. '</br>';

  $av_jpg = strpos($test6,".");

  echo '</br>' .$av_jpg. '</br>';

  echo $test6[$av_jpg+1];
  echo $test6[$av_jpg+2];
  echo $test6[$av_jpg+3];

  $test6 = "ChameAut01.jpg";

  echo '</br>'.str_replace($test6[$av_jpg-1],'',$test6).'</br>';

  $test6 = str_replace($test6[$av_jpg-1],'000',$test6);
  $av_jpg = strpos($test6,".");

  echo '</br>'.str_replace($test6[$av_jpg-2],'',$test6).'</br>';
echo "<p> -----------mes besoin ------------------------- </p> ";
  $test7 = "ChAt01.jpg";
  $minuscule2 = strtolower($test7);
  $qoi = explode(".",$minuscule2,2);
  var_dump($qoi);

  echo $qoi[0]."-2022-001"."." .$qoi[1]."<br/>";

  echo "<br>".$qoi[0]."</br>";


echo "<p> ------------------------------------ </p> ";

?>



 <h3> afiche les images </h3>
 <div>
   <?php
   foreach ($flis_name as $key => $value) {

       echo " <img src='image_Vrac/$value' alt='images en vrac'> $value";
   }


  ?>
</div>
