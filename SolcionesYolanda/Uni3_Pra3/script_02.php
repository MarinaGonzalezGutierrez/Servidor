<?php
/* Almacena la función anterior en el fichero matemáticas.php. Crea un fichero que
la incluya y la utilice.*/
include("matematicas.php");

$casos = array(
  array(0,0,0),
  array(0,0,1),
  array(0,3,-4),
  array(4,4,1),
  array(4,4,2),
  array(1,1,-12)
);

foreach ($casos as $x) {
  echo "<br>";
  echo "Coeficientes: ($x[0],$x[1],$x[2])<br>";
  $r=resuelve_segundo_grado($x[0],$x[1],$x[2]);
//   var_dump($r);
  if (is_null($r)) {
    echo "Todo número real es solución<br>";
  } else if (empty($r)) {
    echo "No hay soluciones reales<br>";
  } else {
    echo "Hay " . count($r) . " soluciones dadas por:<br>";
    foreach ($r as $sol) {
      echo "$sol<br>";
    }
  }
}
      
?>
