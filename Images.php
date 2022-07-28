<?php

/**
 *
 */
class Images
{

  //varible pour srt_replace
  private $_no1 = array ('à','á','â','ã','ä','å','è','é','ê','ë','ì','í','î','ï',
  'ð','ò','ó','ô','õ','ö','ù','ú','û','ü','ý','ÿ','ñ','À','Á','Ã','Ä','Å','Â',
  'È','É','Ê','Ë','Ì','Í','Î','Ï','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý','Ñ','Ç');
  private $_no2 = array ('0','1','2','3','4','5','6','7','8','9');
  private $_no3 = array('-',':','__','___',);

  private $_veu = array ('a','a','a','a','a','a','e','e','e','e','i','i','i','i',
     'o','o','o','o','o','o','u','u','u','u','y','y','n','a','a','a','a','a','a',
     'e','e','e','e','i','i','i','i','o','o','o','o','o','u','u','u','u','y','n','c');


  //varible de depart
  private $_depart = 'E:/wamp64/www/devoire_image_V2/image_Vrac/';

  //varible de detination
  private $_ariver_chat = 'E:/wamp64/www/devoire_image_V2/image_chat/';
  private $_ariver_montagne = 'E:/wamp64/www/devoire_image_V2/image_montagne/';
  private $_ariver_moto = 'E:/wamp64/www/devoire_image_V2/image_moto/';

  public function __construct()
  {

  }


//methode contenue
  public function changeNom()
  {
    //permer de recuperer des variable priver
    $ne_veu_pas1 = $this->_no1;
    $ne_veu_pas2 = $this->_no2;
    $ne_veu_pas3 = $this->_no3;

    $veu = $this->_veu;

    $depart = $this->_depart; //chemin doc image_Vrac

    $ariver_chat = $this->_ariver_chat; //chemin destination doc image_chat
    $ariver_montagne = $this->_ariver_montagne;//chemin destination doc image_montage
    $ariver_moto = $this->_ariver_moto;//chemin destination doc image_moto

    if ($handel = opendir('E:\wamp64\www\devoire_image_V2\image_Vrac'))
    {
      $n_chat=0;
      $n_montagne= 10;
      $n_moto=0;

      while(false !== $entry = readdir($handel) )
      {

        if ($entry != "." && $entry != "..")
        {
          $nom_brute = $entry;

          $brute_trim = trim($nom_brute);

             $nom_et_forma = explode(".",$brute_trim,2);
             $nom_orig = $nom_et_forma[0];
             $forma_orig = $nom_et_forma[1];

          $sup_sepciale_letre = str_replace($ne_veu_pas1,$veu,$nom_orig);
          $sup_chifre = str_replace($ne_veu_pas2,"",$sup_sepciale_letre);
          $sup_simbole = str_replace($ne_veu_pas3,"_",$sup_chifre);


          $forma = strtolower($forma_orig);
          $nom_orig_net = strtolower($sup_simbole);


          if ($nom_orig_net === 'chat_')
          {
            $num_seri = $n_chat+=1;

            if ($num_seri<= 9)
            {
              $nom_fichier[]= $nom_orig_net."00".$num_seri.".".$forma ;

            }

            if ( ($num_seri >= 10) &&  ($num_seri <= 99) )
            {
              $nom_fichier[]= $nom_orig_net."0".$num_seri.".".$forma ;

            }

            if ($num_seri >= 100)
            {
              $nom_fichier[]= $nom_orig_net.$num_seri.".".$forma ;

            }
          } // fin condition renomache et deplasement de chat

          if ($nom_orig_net === 'montagne_')
          {
            // code...
            $num_seri = $n_montagne+=1;

            if ($num_seri<= 9)
            {
              $nom_fichier[]= $nom_orig_net."00".$num_seri.".".$forma ;

            }

            if ( ($num_seri >= 10) &&  ($num_seri <= 99) )
            {
              $nom_fichier[]= $nom_orig_net."0".$num_seri.".".$forma ;

            }

            if ($num_seri >= 100)
            {
              $nom_fichier[]= $nom_orig_net.$num_seri.".".$forma ;

            }

          }

          if ($nom_orig_net === 'moto_') {
            // code...
            $num_seri = $n_moto+=1;

            if ($num_seri<= 9)
            {
              $nom_fichier[]= $nom_orig_net."00".$num_seri.".".$forma ;

            }
            if ( ($num_seri >= 10) &&  ($num_seri <= 99) )
            {
              $nom_fichier[]= $nom_orig_net."0".$num_seri.".".$forma ;

            }
            if ($num_seri >= 100)
            {
              $nom_fichier[]= $nom_orig_net.$num_seri.".".$forma ;

            }

          }

        }

      }
    }

    if (empty($nom_fichier)) {
        $vide[] ="le document et vid nous avons pas de fichier a renomer";
        $nom_fichier = $vide;
    }else {

       $encien_nom;
    }
    closedir($handel);
    return $nom_fichier;
  }

//######################################  nomFichier  #########################################


  public function nomFichier()
  {
    if ($handel = opendir('E:\wamp64\www\devoire_image_V2\image_Vrac'))
    {
      while(false !== $entry = readdir($handel) )
      {
        if ($entry != "." && $entry != "..")
        {

          $encien_nom[]= $entry ;
        }


     }
    }

    if (empty($encien_nom)) {
        $vide[] ="le document et vid";
        $encien_nom=$vide;
    }else {

       $encien_nom;
    }
    closedir($handel);
    return $encien_nom;

   }

//######################################  deplacerRenomer  #########################################

   public function deplacerRenomer()
   {
     //permer de recuperer des variable priver
     $ne_veu_pas1 = $this->_no1;
     $ne_veu_pas2 = $this->_no2;
     $ne_veu_pas3 = $this->_no3;
     //$neVeuPas4 = $this->_no4;
     $veu = $this->_veu;

     $depart = $this->_depart; //chemin doc image_Vrac

     $ariver_chat = $this->_ariver_chat; //chemin destination doc image_chat
     $ariver_montagne = $this->_ariver_montagne;//chemin destination doc image_montage
     $ariver_moto = $this->_ariver_moto;//chemin destination doc image_moto

     if ($handel = opendir('E:\wamp64\www\devoire_image_V2\image_Vrac'))
     {
       $n_chat=0;
       $n_montagne= 10;
       $n_moto=0;

       while(false !== $entry = readdir($handel) )
       {

         if ($entry != "." && $entry != "..")
         {
           $nom_brute = $entry;

           $brute_trim = trim($nom_brute);

              $nom_et_forma = explode(".",$brute_trim,2);
              $nom_orig = $nom_et_forma[0];
              $forma_orig = $nom_et_forma[1];

           $sup_sepciale_letre = str_replace($ne_veu_pas1,$veu,$nom_orig);
           $sup_chifre = str_replace($ne_veu_pas2,"",$sup_sepciale_letre);
           $sup_simbole = str_replace($ne_veu_pas3,"_",$sup_chifre);
           //$entry = str_replace($neVeuPas4,"_",$entry);

           $forma = strtolower($forma_orig);
           $nom_orig_net = strtolower($sup_simbole);


           if ($nom_orig_net === 'chat_')
           {
             $num_seri = $n_chat+=1;

             if ($num_seri<= 9)
             {
               $nom_fichier_net[]= $nom_orig_net."00".$num_seri.".".$forma ;
               $nom_fichier_net_x = $nom_orig_net."00".$num_seri.".".$forma ;

               rename($depart.$nom_brute,$ariver_chat.$nom_fichier_net_x);
             }

             if ( ($num_seri >= 10) &&  ($num_seri <= 99) )
             {
               $nom_fichier_net[]= $nom_orig_net."0".$num_seri.".".$forma ;
               $nom_fichier_net_x= $nom_orig_net."0".$num_seri.".".$forma ;

               rename($depart.$nom_brute,$ariver_chat.$nom_fichier_net_x);
             }

             if ($num_seri >= 100)
             {
               $nom_fichier_net[]= $nom_orig_net.$num_seri.".".$forma ;
               $nom_fichier_net_x = $nom_orig_net.$num_seri.".".$forma ;

               rename($depart.$nom_brute,$ariver_chat.$nom_fichier_net_x);
             }
           } // fin condition renomache et deplasement de chat

           if ($nom_orig_net === 'montagne_')
           {
             // code...
             $num_seri = $n_montagne+=1;

             if ($num_seri<= 9)
             {
               $nom_fichier_net[]= $nom_orig_net."00".$num_seri.".".$forma ;
               $nom_fichier_net_m = $nom_orig_net."00".$num_seri.".".$forma ;

               rename($depart.$nom_brute,$ariver_montagne.$nom_fichier_net_m);
             }

             if ( ($num_seri >= 10) &&  ($num_seri <= 99) )
             {
               $nom_fichier_net[]= $nom_orig_net."0".$num_seri.".".$forma ;
               $nom_fichier_net_m = $nom_orig_net."0".$num_seri.".".$forma ;

               rename($depart.$nom_brute,$ariver_montagne.$nom_fichier_net_m);
             }

             if ($num_seri >= 100)
             {
               $nom_fichier_net[]= $nom_orig_net.$num_seri.".".$forma ;
               $nom_fichier_net_m = $nom_orig_net.$num_seri.".".$forma ;

               rename($depart.$nom_brute,$ariver_montagne.$nom_fichier_net_m);
             }

           }

           if ($nom_orig_net === 'moto_') {
             // code...
             $num_seri = $n_moto+=1;

             if ($num_seri<= 9)
             {
               $nom_fichier_net[]= $nom_orig_net."00".$num_seri.".".$forma ;
               $nom_fichier_net_moto = $nom_orig_net."00".$num_seri.".".$forma ;

               rename($depart.$nom_brute,$ariver_moto.$nom_fichier_net_moto);
             }
             if ( ($num_seri >= 10) &&  ($num_seri <= 99) )
             {
               $nom_fichier_net[]= $nom_orig_net."0".$num_seri.".".$forma ;
               $nom_fichier_net_moto = $nom_orig_net."0".$num_seri.".".$forma ;

               rename($depart.$nom_brute,$ariver_moto.$nom_fichier_net_moto);
             }
             if ($num_seri >= 100)
             {
               $nom_fichier_net[]= $nom_orig_net.$num_seri.".".$forma ;
               $nom_fichier_net_moto = $nom_orig_net.$num_seri.".".$forma ;

               rename($depart.$nom_brute,$ariver_moto.$nom_fichier_net_moto);
             }

           }

         }

       }
     }

     closedir($handel);

   }


}

 ?>
