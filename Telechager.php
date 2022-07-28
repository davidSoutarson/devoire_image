<?php
class telechager
/*

*/

{

  public function __construct()
  {
    // Le constucteur et vide pour le projet
  }

public function upload ($files)
{
  $upload_dir = "E:\wamp64\www\devoire_image_V2/image_Vrac";
  foreach ($files['upload'] ['error'] as $key => $error)
  {
    $error = 0;
    //A. Empêcher le chargement de certains types de fichiers
    $type = $files['upload']['type'] [$key];
    if($type == 'image/jpeg')//seules les fichier jpg sont autorisés
    {
      if ($error == UPLOAD_ERR_OK)
      {
        $tmp_name = $files ['upload']['tmp_name'][$key];
        $name = $files ['upload']['name'][$key];
        if(move_uploaded_file($tmp_name, $upload_dir . $name) == false)$error++ ;
      }
      else
      {
        $error++;
      }
    }
    else
    {
      $error++;
    }
  }
  if($error== 0)
  {
    return true;
  }
  else
  {
    return false;
  }
}

}

 ?>
