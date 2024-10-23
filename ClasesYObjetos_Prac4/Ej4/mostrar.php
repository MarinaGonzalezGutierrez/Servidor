<?php
// Incluye las clases
include ('vehiculo.php');

/* Aplique el método repintar(color) para cambiar el color definido en la
clase Vehículo.  */

$vehiculo = new vehiculo("verde", 500);
$vehiculo -> repintar("verde");
echo "El color del coche es :".$coche -> set_Color()."<br>";


?>

