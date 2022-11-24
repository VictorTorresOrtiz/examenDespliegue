<?php
//Prueba Soporte PART1

include "Soporte.php";
$soporte1 = new Soporte("Transformers", 32); 
echo "<strong>" . $soporte1->titulo . "</strong>"; 
echo "<br>Precio: " . $soporte1->precio . " euros"; 
echo "<br>Precio IVA: " . $soporte1::PrecioConIVA . " euros"; //Es privada y sale error 


include "Disco.php";

$disco = new disco("Ingles", 3.4); 
echo "<br>Idioma: " . $disco->idiomas;
echo "<br>Formato: " . $disco->formatoPantalla; 
