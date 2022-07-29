<?php
require "vue_HTML/vue_formulaire.php";
require "class/Images.php";
require "class/Telechager.php";


if (isset($_FILES['fichier']) && isset($_POST['envoyer_image'])) {

  $telechagemen_obj = new telechager();

  $telecharger = $telechagemen_obj->telechagerImage();

}

$image_obj = new Images();


  $enciens_noms = $image_obj->nomFichier();

  $nouveuxNoms = $image_obj->changeNom();

echo "<h3> ACTION 1: Lie et affiche le contenue du dossier image_Vrac.
Affiche les noms originaux des fichiers du dossier image_Vrac existent</h3>";

  foreach ($enciens_noms as $key => $encien_nom) {

    echo "<li>" .$encien_nom. "</li>";

  }

echo "<h3> ACTION 2: Affiche les nouveaux nom des fichiers du dossier image_Vrac,
les noms ont été standardisés pour être déplacés dans les dossier approprier </h3>";

  foreach ($nouveuxNoms as $key => $nouveuNom)
  {
    echo " <li>" .$nouveuNom. "</li>";
  }

//###############################################################################

if (isset($_POST["deplacer"])) {

  $deplaser = $_POST["deplacer"];

  $image_obj2 = new Images();

  $renome_deplace = $image_obj2->deplacerRenomer();

}

?>

<form class="champForm" action="" method="post">
<h3> ACTION 3: Bouton permettant de déplacer les fichiers  </h3>
  <p> <input type="submit" name="deplacer" value="deplacer">
    <?php if (isset($mesage))
    {
      echo $mesage;
    } ?>
  </p>

<p>de nonbreuse ameliartion son posible</p>
