<?php
  $mascotas = array(
    'perro' => array('mastin' => "Yunito",'salchicha' => "Fuet",'chiguagua' => "Sarnoso"),
    'gato' => array('persa' => "Otis",'comun' => "Garfield", 'siames' => "Princesa")
  );


 foreach($mascotas as $animal => $tipo){
 echo $animal.": <br>";
foreach($tipo as $raza => $nombre){
    echo $raza. ": ".$nombre."<br>";
}

 }

?> 