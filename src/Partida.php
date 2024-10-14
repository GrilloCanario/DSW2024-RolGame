<?php
namespace Dsw\Rolgame;

class Partida 
{
  private $personajes = [];

  public function agregarPersonaje(Personaje $personaje): void
  {
    $this->personajes[] = $personaje;
  }

  public function obtenerPersonajes(): array
  {
    return $this->personajes;
  }

  public function obtenerPersonajesPorClase($class): array
  {
    return array_filter($this->personajes, function($personaje) use ($class) {
      return $personaje instanceof $class;
    });
  }

  public function eliminarPersonaje(Personaje $personaje): void
  {
    $pos = array_search($personaje, $this->personajes);
    if ($pos !== false){
      array_splice($this->personajes, $pos, 1);
    }
  }

  public function Lucha()
  {

  }

  
}
