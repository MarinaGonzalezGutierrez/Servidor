<?php
require_once 'login.php';

$connection = new mysqli($hn, $un, $pw, $db); //puerto
/* verficar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}


$consulta="INSERT INTO usuarios (usu, contra, rol) VALUES ('Yolanda', 'yolanda123', 'jugador')";


$result = $connection->query($consulta);
mysqli_close($connection);



?>