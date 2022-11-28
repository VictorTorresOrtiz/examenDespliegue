<?php

/*
include_once "autoload.php";
use app\Cliente;
use app\CintaVideo;
use app\Juego;
use app\Disco;

$cliente1 = new Cliente("Sam Widwiki", 24);
$cliente2 = new Cliente("Victor torres", 21);

echo "<br>ID cliente 1: " . $cliente1->getNumero();
echo "<br>ID cliente 2: " . $cliente2->getNumero();

$soporte1 = new CintaVideo("Los mataos", 23, 3.5, 107);
$soporte2 = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);  
$soporte3 = new Disco("Origen", 24, 15, "es,en,fr", "16:9");
$soporte4 = new Disco("El Imperio Contraataca", 4, 3, "es,en","16:9");

//Alquilar soportes
$cliente1->alquilar($soporte1);
$cliente1->alquilar($soporte2);
$cliente1->alquilar($soporte3);

//Alquilar soporte previamnete alquilado
$cliente1->alquilar($soporte1);
//Cliente  3 soportes en alquiler como máximo
//No se puede alquilar
$cliente1->alquilar($soporte4);
//No lo tiene alquilado
$cliente1->devolver(4);
//Devuelvo soporte alquilado previamnete
$cliente1->devolver(2);
//alquilar otro soporte
$cliente1->alquilar($soporte4);
//listo los elementos alquilados
$cliente1->listaAlquileres();
//este cliente no tiene alquileres
$cliente2->devolver(2);
