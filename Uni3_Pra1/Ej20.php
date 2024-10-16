<!-- 20. Implementa un array asociativo con los siguientes valores:
 Muestra los valores del array en una tabla, has de mostrar el índice y el valor
asociado.

Elimina el estadio asociado al Real Madrid.
Vuelve a mostrar los valores para comprobar que el valor ha sido eliminado, esta
vez en una lista numerada.

$estadios_Futbol = array("Barcelona" => "Camp Nou, "Real Madrid" => "Santiago Bernabeu",
"Valencia" => "Mestalla", "Real Sociedad" => "Anoeta");

-->

<?php
$estadios_Futbol = array("Barcelona" => "Camp Nou,", "Real Madrid" => "Santiago Bernabeu",
"Valencia" => "Mestalla", "Real Sociedad" => "Anoeta");

//mostrar valores en una tabla
echo "Mostrar valores en una tabla";
echo "<table border='1'>";
echo "<tr><th>Índice</th><th>Valor</th></tr>";
foreach ($estadios_Futbol as $indice => $valor) {
    echo "<tr><td>$indice</td><td>$valor</td></tr>";
}
echo "</table>";

unset($estadios_Futbol["Real Madrid"]); //unset: para eliminar un elemento del array
//eliminar real madrid 
echo "<br/>";
echo "<br/>";
echo "Eliminar real madrid: ";

echo "<ol>";
foreach ($estadios_Futbol as $indice => $valor) {
    echo "<li>$indice: $valor</li>";
}
echo "</ol>";


?>