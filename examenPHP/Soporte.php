<?php

class Soporte {

    //Atributos
    public $titulo;
    public $precio;

    private const IVA = 21/100;

    //Construcctor
    public function __construct($titulo, $precio)
    {
        $this->titulo = $titulo;
        $this->precio = $precio;
        
    }

    public function getPrecio(){
        return  $this->precio;
    }

    public function getTitulo(){
        return  $this->titulo;
    }

    public function resumen( ){
        return $this->getTitulo().'- '. $this->getPrecio();
    }
        
            


  

}