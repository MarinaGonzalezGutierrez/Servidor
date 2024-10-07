<!-- 4. Genera una matriz de 4*4 de forma aleatoria con números enteros desordenados
mostrar en un renglón los elementos almacenados en la diagonal principal y en el
siguiente los de la diagonal secundaria. -->

<?php

$matrizCompleta = array(); //definimos la matriz vacia, que luego se rellena en el for de forma aleatoria

//generar matriz aleatoria
for($i=0; $i<=4; $i++){
    for($j=0; $j<=4; $j++){
        $matrizCompleta[$i][$j] = rand(1,20);

    }
}

//mostrar TODO
echo "MATRIZ GENERADA ALEATORIAMENTE : <br>";
for($i=0; $i<=4; $i++){
    for($j=0; $j<=4; $j++){
       echo $matrizCompleta[$i][$j]."\t"; //tabular

    }
    echo "<br/>"; //salto de linea
    //mostrar cada fila separado
}

//diagonal principal
echo "DIAGONAL PRINCIPAL :<br>";
for($i = 0; $i<=4; $i++){
echo $matrizCompleta[$i][$i];

}

//diagonal secundaria
echo "<br> DIAGONAL SECUNDARIA :<br>";
for($j=0; $j<=4; $j++){
echo $matrizCompleta[$j][4-$j];
}









?>