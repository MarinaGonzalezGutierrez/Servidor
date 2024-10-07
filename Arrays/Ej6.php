<!-- 6. Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
fila y columna del elemento mayor -->

<?php
$matrizCompleta = array();
for($i=0; $i<4; $i++){
    for($j=0; $j<5; $j++){
        $matrizCompleta[$i][$j] = rand(1, 10);

    }
}

for($i=0; $i<4; $i++){
    for($j=0; $j<5; $j++){
        echo $matrizCompleta[$i][$j]."\t";
    }
    echo "<br/>";
}




?>