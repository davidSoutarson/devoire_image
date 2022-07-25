<?php
/**
 *
 */
class RenomerUnFichier
{

  private $_nomFichier;

  private $_neVeuPas1 = array ('à','á','â','ã','ä','å','è','é','ê','ë','ì','í','î','ï',
  'ð','ò','ó','ô','õ','ö','ù','ú','û','ü','ý','ÿ','ñ','À','Á','Ã','Ä','Å','Â',
  'È','É','Ê','Ë','Ì','Í','Î','Ï','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý','Ñ','Ç');

  private $_neVeuPas2 = array ('0','1','2','3','4','5','6','7','8','9');
  private $_neVeuPas3 = array('_','-',' ');
  private $_neVeuPas4 = array('__');

  private $_veu = array ('a','a','a','a','a','a','e','e','e','e','i','i','i','i',
     'o','o','o','o','o','o','u','u','u','u','y','y','n','a','a','a','a','a','a',
     'e','e','e','e','i','i','i','i','o','o','o','o','o','u','u','u','u','y','n','c');



  function __construct(array $nomFichier)
  {
    $this->_nomFichier = $nomFichier;

  }

  public function RnonFichier()
  {
    $nf =$this->_nomFichier;
    $neVeuPas1 = $this->_neVeuPas1;
    $neVeuPas2 = $this->_neVeuPas2;
    $neVeuPas3 = $this->_neVeuPas3;
    $neVeuPas4 = $this->_neVeuPas4;


    $veu = $this->_veu;

    foreach ($nf as $key => $value) {
      $value =trim($value);

      $nom_et_forma = explode(".",$value,2);
      $nomFichier = $nom_et_forma[0];
      $formatFichier = $nom_et_forma[1];

      $formatFichier = strtolower($formatFichier);

      $nomFichier =str_replace($neVeuPas1,$veu,$nomFichier);
      $nomFichier =str_replace($neVeuPas2,"",$nomFichier);
      $nomFichier =str_replace($neVeuPas3,"_",$nomFichier);
      $nomFichier =str_replace($neVeuPas4,"_",$nomFichier);

      $nomFichier = strtolower($nomFichier);

      echo   $nomFichier."." .$formatFichier. "<br>";
    }
  }


}
//   public function renomer()
//   {
//     foreach ($nomfichier as $key => $value)
//     {
//       $key;
//       $value;
//       $orig = trim($value);
//       $orig = explode('.',$orig,2);
//
//       $name = $orig=[0];
//       $extention = $orig=[1];
//
//       $extention = strtolower($extention);
//
//       $name = str_replace($neVeuPas1,$veu,$name);//renplace les cateter non desier
//
//       $neVeuPas = array('0','1','2','3','4','5','6','7','8','9');
//       $name = str_replace($neVeuPas2,"",$name);//renplace les cateter non desier
//
//       $neVeuPas = array('_','-',' ');
//       $name =str_replace($neVeuPas3,"_",$name);//renplace les cateter non desier
//
//       $name = strtolower($name);//converti en minuscule
//
//
//       echo $name."<br>";
//     }
//   }
//
//
// $neVeuPas1 = array ('à','á','â','ã','ä','å','è','é','ê','ë','ì','í','î','ï',
//  'ð','ò','ó','ô','õ','ö','ù','ú','û','ü','ý','ÿ','ñ','À','Á','Ã','Ä','Å','Â',
//  'È','É','Ê','Ë','Ì','Í','Î','Ï','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý','Ñ','Ç');
// $neVeuPas2 = array ('0','1','2','3','4','5','6','7','8','9');
//   $neVeuPas3 = array('_','-',' ');
//
// $veu = array ('a','a','a','a','a','a','e','e','e','e','i','i','i','i',
//  'o','o','o','o','o','o','u','u','u','u','y','y','n','a','a','a','a','a','a',
//   'e','e','e','e','i','i','i','i','o','o','o','o','o','u','u','u','u','y','n','c');

 ?>
