<!-- 5. Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna. -->

<?php

$matrizCompleta = array();
//generar matriz aleatoria
for($i=0; $i<=3; $i++){
    for($j=0; $j<=5; $j++){
        $matrizCompleta[$i][$j] = rand(1, 10);
    }
}

//mostrar todo
for($i=0; $i<=3; $i++){
    for($j=0; $j<=5; $j++){
        echo $matrizCompleta[$i][$j]."\t";
    }
    echo "<br/>";
}


?>