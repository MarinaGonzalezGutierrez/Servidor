<!-- asignar nombres a animales, se pueden poner comillas dobles o comillas simples -->
<?php
 $mascotas = array('perro' => "Yunito",
 'gato' => "Wilson",
 'canario' => "Piolin",
 'tortuga' => "Pepe");
 foreach($mascotas as $item => $description)
 echo "$item: $description<br>";
?> 