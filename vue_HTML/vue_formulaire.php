<?php
require 'vue_HTML/head.html' 
 ?>

<h2> Un formulaire permettant d'ajouter de nouvelles images </h2>

<form class="champForm" action="index.php" method="post" enctype="multipart/form-data">
  <h3>Télé-charger des Images si les ACTIONS 1 et 2 sont vide ou Cliquez sur ACTION 3 </h3>

  <label for="fileUpload">Ajouter des images.</label>
<p>Pour les besoins de l'exercice les images doivent appeler : montagne_2009-001.jpg, chat ou moto </p>
<p>ex montagne_2009-001.jpg </p>
  <input id ="fileUpload" type="file"  name="fichier[]" multiple />

  <p><input type="submit" name="envoyer_image" value="Telecharger"/></p>

</form>

<form class="champForm" action="index.php" method="post">
<h3> ACTION 3: Bouton permetent de deplacer les fichier  </h3>
  <p> <input type="submit" name="deplacer" value="deplacer">
    <?php if (isset($mesage))
    {
      echo $mesage;
    } ?>
  </p>

</form>
