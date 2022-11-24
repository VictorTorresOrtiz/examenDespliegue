<?php

class soporte{

    //Atributos
    public $titulo;
    public $precio;

    

    //Construcctor
    public function __construct($titulo, $precio)
    {
        $this->titulo = $titulo;
        $this->precio = $precio;
        
    }


    //Cont privada
    private const PrecioConIVA = "21%";

}