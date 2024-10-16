<!-- 21. Implementa un array asociativo con los siguientes valores y ordénalo de menor a
mayor. Muestra los valores en una tabla.
$numeros=array(3,2,8,123,5,1) -->

<?php
$numeros = array(3,2,8,123,5,1);
$asociativo = array_combine(range(0, count($numeros) - 1), $numeros);

asort($asociativo); //funcion propia de php pa poner de menor a mayor
echo "<table border='1'>";
echo "<tr><th>Valor</th></tr>";
foreach ($asociativo as $indice => $valor) {
    echo "<tr><td>$valor</td></tr>";
}
echo "</table>";


?>