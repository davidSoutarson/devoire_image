**PHP avancé – Devoir n°1 Devoire image**
*****************************
Barème de notation : 20 points.
<br/>Temps estimatif : 3 heures.  
Critère d’évaluation : savoir créer un script de rangement d’images (en vrac).      
*****************************
__Rangement d’images__
<br/>Pour nous faire parvenir votre devoir.
<br/>Joignez le dossier zippé (ou compressé) contenant tous les fichiers de votre devoir : pages HTML, fichiers CSS
ou. JS, PHP en prenant garde à conserver l’arborescence.
<br/>Le point d’entrée du site doit être le fichier « index.php« , il est donc important que la première page à exécuter
soit cette page pour que le correcteur comprenne votre code.
*****************************
Un stock d’images est disponible en vrac dans un répertoire. Ces images sont nommées comme suit : nom_de_
la_série – numéro.extension.

* Demande :

Vous devez créer un script de rangement d’images (en vrac) en fonction de leur nom. Le but de ce script est de
ranger (déplacer) chaque image du dossier vrac/ dans un répertoire dédié à chaque série, d’après le nom de
l’image. Par exemple, les images vrac/montagne_2009-001.jpg et vrac/montagne_2009-002.jpg seront automatiquement
déplacées, à l’exécution du script de rangement, dans un répertoire montagne_2009/

L’utilisation des fonctions rename (https://www.php.net/manual/fr/function.rename.php) et explode
(https://www.php.net/manual/fr/function.explode.php) sera utile à ce travail.

* Le devoire image fontionnement :

__MVC__

__Model Vue Controller__

__Le Model__ Gére les échanges avec la BDD: **_Dans notre cas le modele gére_** les echanges avec  docier image_Vrac.  
__Le controller__ Il traite les informations --> puis envoie les doner traite a la Vue.   


* Le devoire image arboresence :
views
head.html foot.html
le fichier index.php
