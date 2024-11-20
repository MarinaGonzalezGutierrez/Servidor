
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar usuario y contraseña</title>
</head>
<body>
<form action="prueba.php" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" id="usuario" name ="usuario" required min="1"><br><br>

        <label for="contrasena">Contraseña: </label>
        <input type="password" id="contrasena" name="contrasena" required min="1"><br><br> 
        <!-- Tipo password para que cuando pongas la contraseña te ponga puntinos  -->

        <a href="registro.php">Registrarse</a>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>