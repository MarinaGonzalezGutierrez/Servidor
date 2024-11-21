<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse con mas informacion</title>
</head>
<body>
<form action="pruebaRegistro.php" method="post">
        <label for="usuarioR">Usuario: </label>
        <input type="text" id="usuarioR" name ="usuarioR" required min="1"><br><br>

        <label for="contrasenaR">Contraseña: </label>
        <input type="password" id="contrasenaR" name="contrasenaR" required min="1"><br><br> 
        <!-- Tipo password para que cuando pongas la contraseña te ponga puntinos  -->

        <label for="contrasena2">Confirmar contraseña: </label>
        <input type="password" id="contrasena2" name="contrasena2" required min="1"><br><br> 
        
        <p> ROL :</p>
        <input type="radio" name="opcion" value="1">Estandar
        <br>

        <input type="radio" name="opcion" value="2" >Premium
        <br>
        <button type="submit">Registrarse :</button>
    </form>
</body>
</html>