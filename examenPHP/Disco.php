<?php
include "Soporte.php";
class Disco extends Soporte{
    public $idiomas;
    private $formatoPantalla;
    public function __construct($titulo,$numero,$precio,$idiomas,$formatoPantalla){
        parent::__construct($titulo,$numero,$precio);
        $this->idiomas=$idiomas;
        $this->formatoPantalla=$formatoPantalla;
    }
    public function muestraResumen(){
        parent:: muestraResumen();
        echo "<br>Idiomas: " . $this->idiomas. ""; 
        echo "<br>Formato pantalla: " . $this->formatoPantalla . "";
    }
}
?>