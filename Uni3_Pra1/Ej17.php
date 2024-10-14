<!-- 17. Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por
pantalla. Utiliza la función array_merge() -->

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

$arboles = array('b1' => "12",
'b2' => "Sauce",
'b3' => "Pino",
'b3' => "Naranjo",
'b4' => "Chopo",
'b5' => "Perro",
'b6' => "34"
);

$junte =array_merge($animales, $numeros, $arboles);
 
foreach($junte as $indice => $contenido){
    
    echo "$indice : $contenido <br/> \n";
    echo "<br/>";
    
}

?>