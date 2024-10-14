<!--Crea un array con los nombre Pedro, Ismael, Sonia, Clara, Susana, Alfonso y
Teresa. Muestra el número de elementos que contiene y cada elemento en una
lista no numerada de html.  -->

<?php
$nombres = ['Pedro', 'Ismael', 'Sonia', 'Clara', 'Susana', 'Alfonso', 'Teresa'];
$num_elementos = count($nombres); /// Obtener el número de elementos

// Mostrar el número de elementos
echo "<p>El array contiene $num_elementos elementos.</p>";

echo "<ul>";
foreach ($nombres as $nombre) {
    echo "<li>$nombre</li>";
}
echo "</ul>";
?>
