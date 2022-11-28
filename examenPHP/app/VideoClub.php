<?php

namespace app;

include_once "autoload.php";

use app\Juego;
use app\Disco;
use app\CintaVideo;
use app\Cliente;
use util\ClienteNoEncontradoException;
use util\CupoSuperadoException;
use util\SoporteNoEncontradoException;
use util\SoporteYaAlquiladoException;
class VideoClub
{
    private $numProductos = 0;
    private $numSocios = 0;
    //Las inicializo


    public function __construct(
        private $nombre,
        private $productos = [],
        private $socios = [],

    ) {
    }

    private function incluirProducto(Soporte $producto)
    {
        array_push($this->productos, $producto);
    }

    public function incluirCintaVideo($titulo, $precio, $duracion)
    {
        $CintaVideo = new CintaVideo($titulo, $this->numProductos, $precio, $duracion);
        $this->incluirProducto($CintaVideo);
        echo "<br>Cinta Incluida <br>";
        $this->numProductos++;
    }

    public function incluirDvd($titulo, $precio, $idiomas, $formatPantalla)
    {
        $Disco = new Disco($titulo, $this->numProductos, $precio, $idiomas, $formatPantalla);
        $this->incluirProducto($Disco);
        echo "<br>DVD Incluido<br>";
        $this->numProductos++;
    }

    public function incluirJuego($titulo, $precio, $consola, $minJ, $maxJ)
    {
        $Juego = new Juego($titulo, $this->numProductos, $precio, $consola, $minJ, $maxJ);
        $this->incluirProducto($Juego);
        echo "<br>Juego incluido<br>";
        $this->numProductos++;
    }

    public function incluirSocio($nombre, $maxAlquilerConcurrente = 3)
    {
        $socio = new Cliente($nombre, $this->numSocios, $maxAlquilerConcurrente);
        array_push($this->socios, $socio);
        echo "<br>Socio incluido<br>";
        $this->numSocios++;
    }

    public function listarProductos(){
        echo "<br>Productos:<br>";
        foreach ($this->productos as $products) {
            echo $products->muestraResumen();
        }
    }

    public function listarSocios()
    {
        echo "<br>Socios:<br>";
        foreach ($this->socios as $products) {
            echo $products->muestraResumproductsen();
        }
    }

    public function alquilaSocioProducto($numeroCliente, $numeroSoporte)
    {
        foreach ($this->socios as $so) {
            if ($so->getNumero()  == $numeroCliente) {
                foreach ($this->productos as $soporte) {
                    if ($soporte->getNumero() == $numeroSoporte) {
                        $so->alquilar($soporte);
                    }
                }
            }
        }
    }
}
