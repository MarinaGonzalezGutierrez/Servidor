<!-- 7. Generar una matriz de 3x4 y generar un vector que contenga los valores máximos
de cada fila y otro que contenga los promedios de los mismos. Imprimir ambos
vectores a razón de uno por renglón. -->

<?php
$matrizCompleta = array();

for($i=0; $i<3; $i++){
    for($j=0; $j<4; $j++){
        $matrizCompleta[$i][$j] = rand(0, 9);
    }
}

for($i=0; $i<3; $i++){
    for($j=0; $j<4; $j++){
        echo $matrizCompleta[$i][$j]."\t";
    }
    echo "<br/>";
}

$vectorMaximo = array();
for($i=0; $i < 3; $i++){
    $maximo = $matrizCompleta[$i][0];
    for($j=0; $j < 4; $j++){
        if($matrizCompleta[$i][$j] > $maximo){
            $maximo = $matrizCompleta[$i][$j];
        }
    }

    $vectorMaximos[]= $maximo;
}

echo "Vector maximo:".$maximo;

$vectorPromedio = array();
for($i=0; $i < 3; $i++){
    $suma = 0;
    for($j=0; $j < 4; $j++){
        $suma = $suma + $matrizCompleta[$i][$j];
    }
    $promedio = $suma / 4;
    $vectorPromedio[]= $promedio;
}
echo "Vector promedio:".$promedio;

?>