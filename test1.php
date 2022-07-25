<?php

echo "Helo words<br>";

//variable a lire et modifier comme suit
$nomFichier = "mon Chat-10_mai_2022.GG";
echo $nomFichier."<br>";
$minuscule1= strtolower($nomFichier);
echo $minuscule1."<br>";
$nom_et_extan = explode(".",$minuscule1,2);
$nomF = $nom_et_extan[0];
$extanF = $nom_et_extan[1];
echo $nomF."<br>";
echo $extanF."<br>";

echo "<p> fontion native de php utile ou pas pour le progert!! </p>";
$ascii = ord('-');
echo "la fontion ord() renvoie le code ASCII d'un carater : ".$ascii."</p>";
$longchaine = strlen($nomF);//longeure de la chaine de carater
echo "<p> strlen renvoie la longeure de la chaine \" espase incle \": strlen(\$nomF): .$longchaine. </p>";

$neVeuPas =  array('-','_',' ','0','1','2','3','4','5','6','7','8','9');
echo $new_name = str_replace($neVeuPas,"",$nomF) .'<br>';
$nouveau_nom = $nomF.".".$extanF;
echo $nouveau_nom."<br>";

echo "nouveau teste retouver un mots dans une chaine de carater";


echo "<hr>";
/*_________________________________________________________________*/
echo "<h2>###### teste sur tableau #######</h2>";

$simuleFichier = ['ÀÁÃÄÅÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝÑÇ.gg','   montage.gg  ',
' _Belê__éTé-2009-ÂvorisÄe.gg','bîngo.gg','moto.GG','moto.FF','chat01.GG',
'mon_chat.gg','voyage-montage.gg','ma_moto.GG','chat01.GG',
'montagefr.gg','motofr.GG','motofr.FF','chatfr01.GG','mon_chatfr.gg',
'voyage-montagefr.gg','ma__motofr.GG',100 => 'jeux.GG','chatfr01.GG'];

//var_dump($simuleFichier);

foreach ($simuleFichier as $key => $valu) {

  $key; //index clef ddu tableau
  $valu; //nom des fichier aurigineau

  $valu = trim($valu);//suprime les espace

  $valu = explode('.',$valu,2);// separe le nom complette de l'extention
  $nom = $valu[0];
  $ext = $valu[1];

  $ext = strtolower($ext);//convetie l'extention en minuscule

  $table1 = array ('à','á','â','ã','ä','å','è','é','ê','ë','ì','í','î','ï',
  'ð','ò','ó','ô','õ','ö','ù','ú','û','ü','ý','ÿ','ñ','À','Á','Ã','Ä','Å','Â',
  'È','É','Ê','Ë','Ì','Í','Î','Ï','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý','Ñ','Ç');
  $table2 = array ('a','a','a','a','a','a','e','e','e','e','i','i','i','i',
  'o','o','o','o','o','o','u','u','u','u','y','y','n','a','a','a','a','a','a',
  'e','e','e','e','i','i','i','i','o','o','o','o','o','u','u','u','u','y','n','c');
  $nom = str_replace($table1,$table2,$nom); //renplace les cateter non desier

  $neVeuPas = array('0','1','2','3','4','5','6','7','8','9');
  $nom = str_replace($neVeuPas,"",$nom);//renplace les cateter non desier

  $neVeuPas = array('_','-',' ');
  $nom =str_replace($neVeuPas,"_",$nom);//renplace les cateter non desier

  $nom = strtolower($nom);//converti

  if ($ext === 'gg') {

    if ($key < 10) {
      $numSeri = "00".$key;
       $new_nom ="projet_image_".$nom."_".$numSeri.".".$ext;
    }
    if (($key < 100) && ($key > 9)) {
      $numSeri = "0".$key;
      $new_nom ="projet_image_".$nom."_".$numSeri.".".$ext;
    }
    if ($key > 99 ) {
      $numSeri = $key;
      $new_nom ="projet_image_".$nom."_".$numSeri.".".$ext;
    }

    echo $new_nom.'<br>';

  }

}
/*#############################################################################*/

echo "<hr> Deplaser un fichier avec php <hr> <hr>";


?>
