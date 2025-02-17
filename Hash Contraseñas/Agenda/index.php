<?php
require_once 'conexion.php';

if(isset($_POST['usu'])){
    $usu = $_POST['usu'];
    $psw = $_POST['psw'];
    $connection = new mysqli($hn, $un, $pw, $db);
    if ($connection->connect_error) die("Fatal Error");
    $sql = "INSERT INTO usuarios(Nombre, Clave) VALUES (?, ?)";
    $stmt = $pdo -> prepare($sql);

    //registro usuarios
    if($stmt -> execute([$nombre, $apellidos, $fechaNacimiento, $nombreUsuario, $pass])){
        echo "Usuario registrado correctamente";
    }else{
        echo "Error al introducir el registro";
    }
    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>AGREGAR CONTACTOS</h1>
    <form action="#" method="post" >
        <!-- cajitas para rellenar -->
        <label for="usu">Usuario:</label>
        <input type="text" id="usu" name="usu" required>

        <label for="psw">Contraseña:</label>
        <input type="password" id="psw" name="psw" required>

        <input type="submit" value="Entrar">
        
    </form>
</body>
</html>