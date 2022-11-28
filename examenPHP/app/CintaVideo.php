<?php 
    namespace app;
    include_once "./autoload.php";
    use app\Soporte;
    
    class CintaVideo extends Soporte{

        public function __construct(   
            $titulo,
            $numero,
            $precio,
            private $duracion
        )
        {
            Soporte::__construct($titulo,$numero,$precio);
        }

        
        public function muestraResumen(){ 
            parent::muestraResumen();
            echo "Duración: ".$this->duracion."<br>";
        }
    }
