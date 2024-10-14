<!-- 8. Hacer un algoritmo que llene una matriz de 10x10 con valores aleatorios y
determine la posición [fila, columna] del número mayor almacenado en la matriz. -->

<?php
$filas = 10;
$columnas = 10;
$matrizCompleta = array();
$filaMayor = 0;
$columnaMayor = 0;
$numeroMayor = -1;

for($i=0; $i < $filas; $i++){
    for($j=0; $j < $columnas; $j++){
        $matrizCompleta[$i][$j] = rand(1, 100);
    }

}

for($i=0; $i<$filas; $i++){
    for($j=0; $j<$columnas; $j++){
        echo $matrizCompleta[$i][$j]."\t";
    }
    echo "<br/>";
}

for($i=0; $i < $filas; $i++){
    for($j=0; $j < $columnas; $j++){
        if($matrizCompleta[$i][$j] > $numeroMayor){
            $numeroMayor = $matriz[$i][$j];
            $filaMayor = $i;
            $columnaMayor = $j;
        }
    }
}

echo "El número mayor es $numeroMayor, encontrado en la posición $filaMayor y $columnaMayor].\n";





?>