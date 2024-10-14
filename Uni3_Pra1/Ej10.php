<!-- 10. Carga el siguiente vector e imprime los valores del array asociativo usando la
estructura de control foreach:
$v[1]=90;
$v[30]=7;
$v[‘e’]=99;
$v[‘hola’]=43; -->


<?php
$v = array('1' => "90",
'30' => "7",
'e' => "99",
'hola' => "43"
);

//imprimir valores
foreach($v as $item => $contenido){
    echo "$item: $contenido<br> ";
}



?>