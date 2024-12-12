<?php
require_once 'login.php';

$connection = new mysqli($hn, $un, $pw, $db); //puerto
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta="DELETE FROM usuarios  WHERE usu = 'Yolanda'";
$result = $connection->query($consulta);

mysqli_close($connection);




?>