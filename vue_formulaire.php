<?php
require "head.html";
require "menu.html";
 ?>


<form action="FormulaireUpload.php" method="post" enctype="multipart/form-data">
  <h2>telechager Image</h2>
<div class="champForm">
  <label for="fileUpload">ajouter des images </label>

  <input id ="fileUpload" type="file"  name="upload[]" multiple />
</div>


  <p><input type="submit" name="submit" value="envoyer"/></p>

</form>
<!-- ####################################################################### -->


<form action="FormulaireUpload.php" method="post" enctype="multipart/form-data">
  <h2>renomet</h2>


<div class="champForm">
  <label for="selcte_file">Choisir un fichier a renomer</label>
  <input id ="selcte_file" type="file"  name="selcte_file" >

<p>
  <label for="entre_new_name">renomer le fichier</label>
  <input id ="entre_new_name" type="text"  name="entre_new_name" >
</p>
</div>


  <p><input type="submit" name="submit" value="renomer"/></p>

</form>

<hr>
