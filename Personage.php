<?php
/**
 *
 */


class Personage{

public $nom;
public $vie = 80;
public $atk = 15;

public function __construct($nom){
  $this->nom = $nom;
}

public function crier(){
  echo " HO P.... MDR LE PHP !!! ";
}

public function regenerer(){
  $this->vie = 100;
}

public function mort(){

  if ($this->vie <= 0) {
    echo "Ce personage est mort";
  }
  return $this->vie == 0;
}

}

 ?>
