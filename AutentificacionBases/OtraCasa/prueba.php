<?php
$usu = 'pepito';
$contra = '123';



if($usu == $_POST['usuario'] && $contra == $_POST['contrasena']){
    echo "Bienvenidoo!!";

}else{
    echo "Acceso denegado!!";
}

// if($_POST['contrasenaR'] == $_POST['contrasena2']){
//     echo "Contraseña correcta.";
// }




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