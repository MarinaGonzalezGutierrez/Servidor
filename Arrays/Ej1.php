<!-- a) Declara un array de enteros de nombre $coches e introduce en él 8 elementos
cuyos valores sean 32, 11, 45, 22, 78, -3, 9, 66, 5. A continuación muestra por
pantalla el elemento con localizador 5. Deberás obtener por pantalla que se
visualiza -3. -->

<?php
$coches = array(32, 11, 45, 22, 78, -3, 9, 66, 5);
echo "a) En la posicion 5 esta el :";
echo $coches['5'];
echo "<br>";

/* b) Declara un array de numéricos decimales tipo double de nombre $importe e
introduce en él cuatro elementos que sean 32.583, 11.239, 45.781, 22.237. A
continuación muestra por pantalla el elemento con localizador 1 y el 3..*/

$importe = array(32.583, 11.239, 45.781, 22.237);
echo "b) En la posicion 1 esta el :";
echo $importe['1'];
echo "<br>";
echo "b) En la posicion 3 esta el :";
echo $importe['3'];

/*c) Declara un array de booleanos de nombre $confirmado e introduce en él seis
elementos que sean true, true, false, true, false, false. A continuación muestra por
pantalla el elemento con localizador cero. Deberás obtener por pantalla que se
muestra “true”. */

$confirmado = array('true', 'true', 'false', 'true', 'false', 'false'); 
//para que muestre la palabra true tenemos q ponerlo como String, si quisieramos mostrarlo como 1 se pone sin comillas
echo "<br>";
echo "c) En la posicion 0 esta el :";
echo $confirmado['0'];


/*d) Declara un array de strings de nombre $jugador e introduce en él 5 elementos
que sean "Crovic", "Antic", "Malic", "Zulic" y "Rostrich". A continuación usando el
operador de concatenación haz que se muestre la frase: <<La alineación del
equipo está compuesta por Crovic, Antic, Malic, Zulic y Rostrich.*/

?>