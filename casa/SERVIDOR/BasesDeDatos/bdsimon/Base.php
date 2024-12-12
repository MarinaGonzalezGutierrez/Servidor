<?php
require_once 'login.php';



// Establecer la conexión
$connection = new mysqli($hn, $un, $pw, $db); // Recuerda que debes haber definido estas variables en 'login.php'
if ($connection->connect_error) { // Usar la propiedad connect_error del objeto mysqli
    printf("Falló la conexión: %s\n", $connection->connect_error);
    exit();
}

// Función para eliminar
function delete($connection) { // Se pasa $connection como parámetro
    $consulta = "DELETE FROM usuarios WHERE usu = 'Yolanda'";
    $result = $connection->query($consulta);

    if ($result) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar usuario: " . $connection->error;
    }
}

// Función para insertar
function insert($connection) { // Se pasa $connection como parámetro
    $consulta = "INSERT INTO usuarios (usu, contra, rol) VALUES ('Yolanda', 'yolanda123', 'jugador')";
    $result = $connection->query($consulta);

    if ($result) {
        echo "Usuario insertado correctamente.";
    } else {
        echo "Error al insertar usuario: " . $connection->error;
    }
}

// Llamar a las funciones según sea necesario
// insert($connection);
// delete($connection);

// Cerrar la conexión
$connection->close();
?>
