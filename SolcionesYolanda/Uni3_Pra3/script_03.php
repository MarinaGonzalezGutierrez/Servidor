<?php
/* Escribe una función que reciba una cadena y comprueba si es un palíndromo. */
function es_palindromo($cadena) {
  //convertir cadena a minúsculas y quitar espacios en blanco
  $cadena = preg_replace('/\s+/', '', $cadena);
  $cadena2=strtolower($cadena);
  if ($cadena2===strrev($cadena2))
  return true;
   else 
  return false;
}

$pruebas=['ana','A luna ese anula','Me llamo Yolanda','Anita lava la tina'];

foreach ($pruebas as $str) {
  if (es_palindromo($str)) {
    echo "'$str' es un palíndromo<br>";
  } else {
    echo "'$str' NO es un palíndromo<br>";
  }
}
?>
