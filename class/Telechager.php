<?php

class telechager
/*

*/

{

  public function __construct()
  {
    // Le constucteur et vide pour le projet
  }



  public function telechagerImage()
  {
    echo "<h3 id='bleux'> information telechagement : </h3>";


    foreach ($_FILES["fichier"]["error"] as $key => $error)
    {
      $name = $_FILES['fichier']['name'][$key];
      $type = $_FILES['fichier']['type'][$key];
      $tmp_name= $_FILES['fichier']['tmp_name'][$key];
      $error = $_FILES['fichier']['error'][$key];
      $size = $_FILES['fichier']['size'][$key];

    if(($type == 'image/jpeg')AND($size < '40000')) // seules les fichiers jpg sont autorisés
    {
      if ($error == UPLOAD_ERR_OK)
      {
        if(is_uploaded_file( $_FILES['fichier']['tmp_name'] [$key]))
        {
          echo "<p>File ". $_FILES['fichier']['name'][$key] ." téléchargé avec succès.</p>";

          $tmp_name = $_FILES["fichier"]["tmp_name"][$key];
          // basename() peut empêcher les attaques "filesystem traversal";
          // une autre validation/nettoyage du nom de fichier peux être appropriée
          $name = basename($_FILES["fichier"]["name"][$key]);
          /*la fonction move_uploaded_file déplace un fichier téléchargé
          (le nom de la fonction est explicite)*/
          move_uploaded_file($tmp_name, "image_Vrac/$name");
        }
      }
    }
    else
    {
      $error++;
      $ficher_rejeter = $_FILES['fichier']['name'][$key];

      if($type !== 'image/jpeg')
      {
      echo"<p> le fichier: .$ficher_rejeter . de type : .$type. : n'est pas au format jpg</p> ";
      }
      if($size > '40000')
      {
        echo"<p> le fichier: .$ficher_rejeter. trop volumineux: .$size . de size :</p> ";
      }
    }


    }

  }

}
 ?>
