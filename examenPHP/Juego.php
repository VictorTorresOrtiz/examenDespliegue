<?php
include "Soporte.php";
class Juego extends Soporte{
    public $consola;
    private $minNumJugadores;
    private $maxNumJugadores;
    public function __construct($titulo,$numero,$precio,$consola,$minNumJugadores,$maxNumJugadores){
        parent::__construct($titulo,$numero,$precio);
        $this->consola=$consola;
        $this->minNumJugadores=$minNumJugadores;
        $this->maxNumJugadores=$maxNumJugadores;
    }
    public function muestraJugadoresPosibles(){
        if($this->minNumJugadores==1 && $this->maxNumJugadores==1){
            echo "Dedicado a  un jugador";
        }else if($this->minNumJugadores==$this->maxNumJugadores){
            echo "Para $this->minNumJugadores jugadores";
        }else{
            echo "Desde $this->minNumJugadores hasta $this->maxNumJugadores jugadores";
        }
    }
    public function muestraResumen(){
        parent:: muestraResumen();
        echo "<br>Consola: $this->consola";
        echo $this->muestraJugadoresPosibles(); 
    }
}
?>