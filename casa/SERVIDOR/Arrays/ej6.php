<?php

$filas = 4;
$columnas = 5;
$matriz = [];

$matriz = array();
for($i=0; $i<4; $i++){
    for($j=0; $j<5; $j++){
        $matriz[$i][$j] = rand(1, 100);

    }
}

//inicializar variables para el maximo
$maxValor = $matriz[0][0];
$filaMax =0;
$columnaMax = 0;

//Buscar el valor maximo y sus posiciones
for($i =0; $i < $filas; $i++){
    for($j=0; $j < $columnas; $j++){
        if($matriz[$i][$j] > $maxValor){
          $maxValor = $matriz[$i][$j];
          $filaMax = $i;
          $columnaMax = $j;
        }
    }
}

// Imprimir la matriz
echo "Matriz generada:<br/>";
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        echo $matriz[$i][$j] . "\t";
    }
    echo "<br/>";
}
// Mostrar el valor máximo y su posición
echo "\nEl valor máximo es: $maxValor\n";
echo "Se encuentra en la fila $filaMax y columna $columnaMax\n";



?>