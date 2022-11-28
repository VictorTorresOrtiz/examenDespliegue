<?php 
   namespace app;
   require_once "autoload.php";
   use app\Soporte;

    class Juego extends Soporte{

        public function __construct(   
            $titulo,
            $numero,
            $precio,
            public $consola,
            private $minNumJugadores,
            private $maxNumJugadores
        )
        {
            Soporte::__construct($titulo,$numero,$precio);
        }

    
        public function muestraJugadoresPosible(){
            if($this->minNumJugadores == $this->maxNumJugadores){
                return ($this->maxNumJugadores > 1) ? "<br>Para un maximo de".$this->maxNumJugadores." jugadores." : "<br>";
            }else{
                return "<br>Desde ".$this->minNumJugadores." hasta".$this->maxNumJugadores." jugadores.<br>";
            }
        }

        // Get the value of resumen
        public function muestraResumen(){
            parent::muestraResumen();
            echo "Consola: ".$this->consola;
            echo $this->muestraJugadoresPosible();   
        }

    }

?>