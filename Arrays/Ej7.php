<!-- 7. Generar una matriz de 3x4 y generar un vector que contenga los valores máximos
de cada fila y otro que contenga los promedios de los mismos. Imprimir ambos
vectores a razón de uno por renglón. -->

<?php
$matrizCompleta = array();

//cargar los aleatorios
for($i=0; $i<3; $i++){
    for($j=0; $j<4; $j++){
        $matrizCompleta[$i][$j] = rand(0, 9);
    }
}

//mostrar la matriz
for($i=0; $i<3; $i++){
    for($j=0; $j<4; $j++){
        echo $matrizCompleta[$i][$j]."\t";
    }
    echo "<br/>";
}

//el maximo
$vectorMaximo = array();
$vectorPromedio = array();
for($i=0; $i < 3; $i++){
    $maximo = $matrizCompleta[$i][0];
    for($j=0; $j < 4; $j++){
        if($matrizCompleta[$i][$j] > $maximo){
            $maximo = $matrizCompleta[$i][$j];
        }
    }
    $vectorMaximo[]= $maximo;
//el promedio
    $suma = 0;
    for($k=0; $k < 4; $k++){
        $suma += $matrizCompleta[$i][$k];
    }
    $promedio = $suma / 4;
    $vectorPromedio[]= $promedio;
}

//mostrar resultados
echo "Vector de máximos:\n";
for($i=0; $i<3; $i++){
    echo $vectorMaximo[$i]."\t";
}
echo "<br/>";

echo "Vector de promedios:\n";
for($i=0; $i<3; $i++){
    echo $vectorPromedio[$i]."\t";
}
echo "<br/>";


?>