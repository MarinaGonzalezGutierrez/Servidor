<!-- 22. Crea un array con los siguientes valores: 5->1, 12->2, 13->56, x->42. Muestra el
contenido. Cuenta el número de elementos que tiene y muéstralo por pantalla. A
continuación borrar el contenido de posición 5. Vuelve a mostrar el contenido y
por último elimina el array. -->

<?php
$numeros = array('5' => "1",
'12' => "2",
'13' => "56",
'x' => "42"
);

//imprimir valores
foreach($numeros as $index => $num){
    echo "$index: $num<br> ";
}

//contar elementos
$elementos = count($numeros);//count: contar numero de elementos
echo "<br>Número de elementos: $elementos<br>";

//borrar posicion 5
echo "<br/>";
unset($numeros[5]);
echo "Borrar contenido de posicion 5 : \t";
echo " <br/>";
foreach($numeros as $index => $num){
    echo "$index: $num<br> ";
}

//eliminar array
unset($numeros); //unset: eliminar array
?>