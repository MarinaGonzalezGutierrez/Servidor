<?php
require_once 'login.php';
session_start(); // Iniciar la sesión al principio del script

$conn = new mysqli($hn, $un, $pw, $db, 3306);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    
    $consulta = "SELECT Nombre, Clave FROM usuarios WHERE Nombre='$usuario' AND Clave='$clave'";
    $result = $conn->query($consulta);
    
    if (!$result) {
        echo "Error en la consulta<br><br>";
    }
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Guardar la información del usuario en la sesión
        $_SESSION['usuario'] = $usuario;
        
        echo "¡Bienvenido, " . htmlspecialchars($row['Nombre']) . "!<br>"; 
        header('Location: inicio.php');
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¡Vamos a jugar al Simon!</h1>
    <form method="POST" action="index.php">
        Usuario:<br> 
        <input type="text" name="usuario" required><br><br>
        Clave:<br> 
        <input type="password" name="clave" required><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
