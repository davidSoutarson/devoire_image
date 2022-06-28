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

  public function contenue()
  {
    if ($handel = opendir('E:\wamp64\www\devoire_image\image_Vrac')){

      while(false !== $entry = readdir($handel) ) {

        if ($entry != "." && $entry != "..") {

              $nom_image_vrac[]= $entry;

          }

      }

    }

    closedir($handel);
    return $nom_image_vrac;

  }

}



 ?>
