<?php
require "head.html";
require "menu.html";
 ?>

 
<form action="FormulaireUpload.php" method="post" enctype="multipart/form-data">
  <h2>vue_formulaire</h2>

  <label for="fileUpload">ajouter des images </label>

  <input id ="fileUpload" type="file"  name="upload[]" multiple />

  <p><input type="submit" name="submit" value="envoyer"/></p>

</form>

<hr>
