<!-- 16. Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu
mismo los valores, poniendo índices alfanuméricos a cada valor con tres
elementos cada uno. Junta ambos arrays en uno solo llamado “lenguajes” y
muéstralo por pantalla en una tabla. -->


<?php
// Crear el array de lenguajes del lado del cliente con índices alfanuméricos
$lenguajes_cliente = [
    "cli_1" => "JavaScript",
    "cli_2" => "HTML",
    "cli_3" => "CSS"
];

// Crear el array de lenguajes del lado del servidor con índices alfanuméricos
$lenguajes_servidor = [
    "srv_1" => "PHP",
    "srv_2" => "Python",
    "srv_3" => "Ruby"
];

// Unir ambos arrays en uno solo llamado 'lenguajes'
$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);


//Mostrar
echo"<table border='1' cellpadding='5' cellspacing='0'>";
echo"<tr><th> Indice </th> <th>Lenguaje</th></tr>";

foreach($lenguajes as $indice => $lenguaje){
    echo "<tr><th> $indice </th> <th>$lenguaje</th></tr>";
}

echo "</table>";
?>
