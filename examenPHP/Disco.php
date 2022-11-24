<?php 

class disco extends Soporte {

    public $idiomas;
    public $formatoPantalla;
    
    public function __construct($idiomas, $formatoPantalla)
    {
        $this->idiomas = $idiomas;
        $this->formatoPantalla = $formatoPantalla;
        
    }

    public function getIdiomas(){
        return  $this->idiomas;
    }

    public function getFormatoPantalla(){
        return  $this->formatoPantalla;
    }

    public function resumenDisco()
    {
        return $this->getIdiomas().'- '. $this->getFormatoPantalla();
    }


    
}