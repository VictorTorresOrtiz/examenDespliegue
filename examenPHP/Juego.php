<?php 
class Juego extends Soporte {


    public $consola;
    public $minNumJugadores;
    public $maxNumJugadores;
    public $muestraJugadoresPosibles = array();

    public function getTitulo()
    {
        return  $this->titulo;
    }

    public function __construct($titulo, $consola, $minNumJugadores, $maxNumJugadores, $muestraJugadoresPosibles = array()) {
        $this->titulo = $titulo;
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
        $this->$muestraJugadoresPosibles[] = $muestraJugadoresPosibles;

    }
 




}