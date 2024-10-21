<?php
/* Escribe una función que reciba un array de números, y un número, el límite. La
función tiene que devolver un nuevo array que contenga solo los elementos del
array original menores que el límite*/
  function filtra($v,$lim) {
    $j=0;
    for ($i=0; $i<count($v); $i++) {
      if ($v[$i] < $lim) {
        $vnuevo[$j]=$v[$i];
        $j++;
      }
    } 
	
	if (!isset($vnuevo)) 
	return NULL;
	ELSE
    return $vnuevo;
  }

  $num=[1,24,30,4,5,7,9,-5];
  echo "Vector de números:<br>";
  print_r($num);
  echo "<br><br>";
  $limites=[4,-6,100,28,6];
  foreach ($limites as $y) {
    echo "Límite: $y<br>";
    print_r(filtra($num,$y));
    echo "<br>";
	echo "<br>";
  }

?>
