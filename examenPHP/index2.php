<?php
/*include "Disco.php";
/*
$miDisco = new Disco("Origen", 24, 15, "es,en,fr", "16:9");
echo "<strong>" . $miDisco->titulo . "</strong>";
echo "<br>Precio: " . $miDisco->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $miDisco->getPrecioConIva() . " euros";
$miDisco->muestraResumen();
*/

include "Juego.php";


$gow = new Juego("God of War: Ragnarök", "PS4", 1,2,); 
echo "<strong>" . $gow->titulo . "</strong>"; 
echo "<br>Consola: " . $gow->consola; 
echo "<br>Jugadores Minimos: " . $gow->minNumJugadores ; 
echo "<br>Jugadores Maximos: " . $gow->maxNumJugadores ; 
echo "<br>Jugadores Posibles: " . $gow->muestraJugadoresPosibles ; 
