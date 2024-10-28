<!-- Pagina mostrar -->

<?php
include 'vehiculo.php';


//crear un objto de dos_ruedas rojo de 150 kg
$dos_ruedas = new Dos_ruedas("rojo", 150, 125);

//persona 70 kilos
$dos_ruedas -> añadir_persona(70);
echo "El peso de 2 ruedas es ".$dos_ruedas-> getPeso()."Kg <br> ";

//cambiar color a verde y añadir una cilindrada de 1000
$dos_ruedas -> setColor("Verde");

$dos_ruedas-> setCilindrada(1000);

//mostrar valores d las dos ruedas
Vehiculo::ver_atributo($dos_ruedas);
echo "<br>";



?>