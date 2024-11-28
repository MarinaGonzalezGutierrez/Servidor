<?php

require_once 'login.php';  
$conn = new mysqli($hn,$un,$pw,$db,3307); 
if ($conn->connect_error) die("Error de conexión: " . $conn->connect_error);

if (isset($_POST['usu']) && isset($_POST['contra'])){

    $usuario = $_POST['usu']; 
    $contra = $_POST['contra']; 
    $rol = $_POST['rol'];
    $consulta ="INSERT INTO usuarios(Usu,Contra,Rol) VALUES ('$usuario','$contra','$rol')";
    $result = $conn->query($consulta); 
    if (!$result){ echo "INSERT failed<br><br>"; 
    }else{ 
        echo"Usuario registrado correctamente";
    }
  
}else{ 
        echo"por favor complete correctamente el registro";
    }

 //comprobación de la contraseña, y comprobar que el usuario no existe
 if($contra == $conf){
    
 }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form method="POST" action="Registro.php">
        Nombre:<br> <input type="text" name="usu" required><br><br>
        Contraseña:<br> <input type="password" name="contra" required><br><br>
        Confirmar contraseña:<br> <input type="password" name="conf" required><br><br>
        Rol:<br>
        Jugador <input type="radio" name="rol" value="Jugador" checked><br>
        Jugador Premium <input type="radio" name="rol" value="Jugador Premium"><br><br>
        <input type="submit" value="REGISTRARSE">
    </form>
</body>
</html>