<?php
// Incluye las clases
include ('vehiculo.php');
include ('coche.php');
include ('cuatro_ruedas.php');


/* Aplique el método repintar(color) para cambiar el color definido en la
clase Vehículo.  */

$coche = new Coche("rojo", 2000, 4, 0); //color inicial
echo "El color inicial del coche es :".$coche->get_color();


$coche -> repintar("verde");
echo "El color del coche es :".$coche->get_color();

echo ""
?>

