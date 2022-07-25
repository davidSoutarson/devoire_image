<?php
require('RenomerUnFichier.php');
echo "Helo words<br>";


$simuleFichier = ['ÀÁÃÄÅÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝÑÇ.gg','   montage.gg  ',
' _Belê__éTé-2009-ÂvorisÄe.gg','bîngo.gg','moto.GG','moto.FF','chat01.GG',
'mon_chat.gg','voyage-montage.gg','ma_moto.GG','chat01.GG',
'montagefr.gg','motofr.GG','motofr.FF','chatfr01.GG','mon_chatfr.gg',
'voyage-montagefr.gg','ma__motofr.GG',100 => 'jeux.GG','chatfr01.GG'];

echo "<hr> Simulation renomer un fichier <hr> <hr>";


$obj1 = new RenomerUnFichier($simuleFichier);

echo $obj1->RnonFichier();

/*#############################################################################*/

echo "<hr> Deplaser et Renomer fichier avec php <hr> <hr>";


?>
