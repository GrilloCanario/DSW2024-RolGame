<?php
namespace Dsw\Rolgame;

class Clerigo extends Personaje implements Curable
{
  public $poderCurativo;

  public function __construct($nombre, $nivel, $puntosDevida, $poderCurativo)
  {
    parent::__construct($nombre, $nivel, $puntosDevida);
    $this->poderCurativo = $poderCurativo;
  }

  public function atacar()
  {
    return $this->poderCurativo * 2;
  }

  public function defender($dañoInicial)
  {
    $dañoFinal = $dañoInicial - $this->poderCurativo / 2;
    return $dañoFinal > 0 ? $dañoFinal : 0;
  }

  public function curar()
  {
    return $this->poderCurativo * 3;
  }
}