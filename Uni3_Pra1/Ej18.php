<!-- 18. Realiza el ejercicio anterior pero con la funicón array_push(). -->

<?php
$animales = array('a1' => "Lagartija",
'a2' => "Araña",
'a3' => "Perro",
'a3' => "Gato",
'a4' => "Ratón"
);

$numeros = array('n1' => "12",
'n2' => "34",
'n3' => "45",
'n3' => "52",
'n4' => "12"
);

/*
$arboles = array('b1' => "12",
'b2' => "Sauce",
'b3' => "Pino",
'b3' => "Naranjo",
'b4' => "Chopo",
'b5' => "Perro",
'b6' => "34"
);
*/

array_push($animales, "Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34" );
array_push($animales, "34", "45", "52", "12");
//print_r($animales);
 foreach($animales as $contenido => $datos){
    echo "<br/>";
    echo $datos. "\t";
 }
?>