<?php
//Como la clasd es abstract no se puede inicializar ningun objeto de esta clase
 //  No hace falta que lo implementen los hijos ya que ellos la implementan por herencia.
 namespace app;
 include_once 'autoload.php';
 use app\Resumible;
abstract class Soporte implements Resumible {

    private const IVA = 0.21;

    public function __construct(
        public $titulo,
        protected $numero,
        private $precio
    ) {
    }

    // Get the value of precio
    public function getPrecio()
    {
        return $this->precio;
    }

    // Get the value of Precio con IVA
    public function getPrecioConIva()
    {
        $precio = $this->precio + ($this->precio * self::IVA);
        return $precio;
    }

    // Get the value of numero
    public function getNumero()
    {
        return $this->numero;
    }

    // Get the value of resumen
    public function muestraResumen(){
        echo "<br><strong>" . $this->titulo . "</strong>";
        echo "<br>Número: " . $this->numero;
        echo "<br>Precio: " . $this->precio . " euros";
        echo "<br>Precio IVA: " . $this->getPrecioConIVA() . " euros<br>";

    }
}
