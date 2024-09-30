<?php
//la media de un vector, q es de diez en diez cada "casilla"

$conteo = 0;
$media=0;

for ($i = 1; $i <= 5; $i++) {
    $Media[$i] = $i * 10;
    $conteo += $Media[$i];
}

$media = $conteo / count($Media); //Cuenta todos los elementos en un array o algo de un objeto!! Igual que el .length en java
var_dump($Media);

//Mostrar el resultado
echo "La media es :" .$media;
?>