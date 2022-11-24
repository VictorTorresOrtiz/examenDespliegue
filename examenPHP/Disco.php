<?php 

class disco extends Soporte {

    public $idiomas;
    public $formatoPantalla;
    
    public function __construct($idiomas, $formatoPantalla)
    {
        $this->idiomas = $idiomas;
        $this->formatoPantalla = $formatoPantalla;
        
    }

    
}