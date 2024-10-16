<!-- 2. Almacena la función anterior en el fichero matemáticas.php. Crea un fichero que
la incluya y la utilice. -->

<?php
include  "matematicas.php";

$a = 1;
echo "a :".$a;
echo "<br>";
$b= -5;
echo "b :" .$b;
echo "<br>";
$c = 6;
echo "c :". $c;
echo "<br>";
$soluciones = resolverEcuacionSegundoGrado($a, $b, $c);

if($soluciones !== false){
    echo "La ecuacion tiene como solucion :";
    print_r($soluciones);
}else{
    echo "No tiene solucion";
}
?>