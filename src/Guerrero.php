<?php
namespace Dsw\Rolgame;

class Guerrero extends Personaje {
  public $fuerza;

  public function __construct($nombre, $nivel, $puntosDevida, $fuerza)
  {
    parent::__construct($nombre, $nivel, $puntosDevida);
    $this->fuerza = $fuerza;
  }

  public function atacar()
  {
    return $this->nivel * $this->fuerza;
  }

  public function defender($dañoInicial)
  {
    $dañoFinal = $dañoInicial - $this->fuerza / 2;
    return $dañoFinal > 0 ? $dañoFinal : 0;
  }

}