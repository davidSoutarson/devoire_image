<?php

/**
 *
 */
class Images
{


  public $coment ='aficher';
  public $tableau =['aficher','tableau'];


  public function __construct()
  {
    // code...
  }

//methode contenue
  public function contenue()
  {
    if ($handel = opendir('E:\wamp64\www\devoire_image\image_Vrac')){
      $n="";
      while(false !== $entry = readdir($handel) ) {
        if ($entry != "." && $entry != "..") {
              $entry = strtolower($entry);
            
              $nom_image_vrac[]= $entry;
          }
      }
    }
    closedir($handel);
    return $nom_image_vrac;
  }

  //methode ......


}

 ?>
