<?php

class soporte{

    //Atributos
    public $cintas;
    public $Videojuegos;

    //Construcctor
    public function __construct($cintas, $Videojuegos = 0)
    {
        $this->cintas = $cintas;
        $this->Videojuegos = $Videojuegos;
        
    }

    //Cont privada
    private const IVA = "21%";

}