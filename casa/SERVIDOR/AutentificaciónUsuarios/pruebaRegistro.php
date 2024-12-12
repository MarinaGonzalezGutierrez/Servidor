<?php
$estan = 1;
$prem = 2;
if(isset($_POST['usuarioR'])){
    if($_POST['contrasenaR'] == $_POST['contrasena2']){
    echo "Contraseña correcta.";
}

if($_POST['opcion1'] == $estan){
    echo "Cliente estandar.";
}

if($_POST['opcion2'] == $prem){
    echo "Cliente premium.";
}
}

echo "Usuario registrado correctamente."


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="acceso.php">Accede a la página de nuevo!!</a>
</body>
</html>