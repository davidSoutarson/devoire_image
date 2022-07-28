<?php
require "head.html";
require "menu.html";
require "Images.php";
require "vue_formulaire.php";
require "Telechager.php";

echo "<h2>vue trie image.php </h2>";

$image_obj = new Images();

//  var_dump($contenueImage_varc);

  $enciens_noms = $image_obj->nomFichier();

  $nouveuxNoms = $image_obj->changeNom();

echo "<h3> ACTION 1: Lire et aficger le contenue du doccier image_Vrac . <br> Afiche les noms origineaux des fichier du dosier image_Vrac exitent</h3>";

  foreach ($enciens_noms as $key => $encien_nom) {

    echo "<li>" .$encien_nom. "</li>";

  }

echo "<h3> ACTION 2:Si il exite afiche les nouveux nom des fichier du dosier image_Vrac,
les non on etait sendardiser pour déplasement dans le docier aproprier</h3>";

  foreach ($nouveuxNoms as $key => $nouveuNom)
  {
    echo "<li>" .$nouveuNom. "</li>";
  }


echo "<h3> ACTION 3: Bouton permetent de deplacer les fichier  </h3>";

if (isset($_POST["deplacer"])) {

  $deplaser = $_POST["deplacer"];

  $image_obj2 = new Images();

  $renome_deplace = $image_obj2->deplacerRenomer();

  //$mesage ="Le fichier bien a etait deplaser";
}

?>


<form class="" action="" method="post">

  <p> <input type="submit" name="deplacer" value="deplacer">
    <?php if (isset($mesage))
    {
      echo $mesage;
    } ?>
  </p>

</form>
