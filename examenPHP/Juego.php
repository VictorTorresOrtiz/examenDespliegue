<?php 
class Juego extends Soporte {

    public $titulo;
    public $consola;
    public $minNumJugadores;
    public $maxNumJugadores;
    public $muestraJugadoresPosibles = array();

    public function __construct($titulo, $consola, $minNumJugadores, $maxNumJugadores, $muestraJugadoresPosibles = array()) {
        $this->titulo = $titulo;
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
        $this->$muestraJugadoresPosibles[] = $muestraJugadoresPosibles;

    }
 




}