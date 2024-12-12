<?php
include 'operaciones.php';

$operar = new Operaciones(50, 20);
echo $operar. "<br>";

echo $operar->suma()."<br>";
echo $operar->resta()."<br>";
echo $operar->multiplicacion()."<br>";
echo $operar->division();




?>