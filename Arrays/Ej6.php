<!-- 6. Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
fila y columna del elemento mayor -->

<?php
$matrizCompleta = array();
$mayor =  -1; //numero menor de los que se hagan automaticamente
$filaMayor = 0;
$columnaMayor = 0;

for($i=0; $i<4; $i++){
    for($j=0; $j<5; $j++){
        $matrizCompleta[$i][$j] = rand(1, 50);

    }
}

for($i=0; $i<4; $i++){
    for($j=0; $j<5; $j++){
        echo $matrizCompleta[$i][$j]."\t";
    }
    echo "<br/>";
}

//para buscar el numero mayor
for($i=0; $i< 4; $i++){
    for($j=0; $j<5; $j++){
        if($matrizCompleta[$i][$j] > $mayor){
            $mayor = $matrizCompleta[$i][$j];
            $filaMayor = $i;
            $columnaMayor = $j;
        }
    }
}
echo "El numero mayor se encuentra en la fila ".$filaMayor. " y columna ".$columnaMayor;




?>