<!-- 7. Generar una matriz de 3x4 y generar un vector que contenga los valores máximos
de cada fila y otro que contenga los promedios de los mismos. Imprimir ambos
vectores a razón de uno por renglón. -->

<?php
$filas = 3;
$columnas = 4;
$matrizCompleta = []; //solo filas porque solo tenemos que analizar estas

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

//inicializar los vectores MAXIMO Y PROMEDIO
$maximo = [];
$promedio = [];

//calcular maximos y promedios
for($i=0; $i< $filas; $i++){
    $maximo[$i] = max($matrizCompleta[$i]); //max: funcion de php para sacar el maximo
    $promedio[$i] = array_sum($matrizCompleta[$i])/$columnas;
}

//imprimir vectores 
echo "Valores maximos por filas :\n";
foreach ($maximo as $maximo){
    echo $maximo. " \n";
}
echo "<br/>";
echo "\n Promedios por filas :\n";

foreach ($promedio as $promedio){
    echo $promedio." \n";
}


?>