<?php
require 'Personage.php';

$merlin = new Personage("Merlin");

$merlin->nom = "Merlin";

var_dump($merlin);
var_dump($merlin->crier());
var_dump($merlin->regenerer());
var_dump($merlin->vie=0);
var_dump($merlin->mort());

  $harry = new Personage("Harry");
  var_dump($harry);
  var_dump($harry->mort());

  ?>
