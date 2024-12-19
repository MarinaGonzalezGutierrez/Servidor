<?php
$target_dir = "subidas/";  // Directorio donde se guardarán los archivos subidos
$target_file = $target_dir. basename($_FILES["Imagen0"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen0"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen0"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

    $target_file = $target_dir. basename($_FILES["Imagen1"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen1"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen1"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

    $target_file = $target_dir. basename($_FILES["Imagen2"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen2"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen2"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

    $target_file = $target_dir. basename($_FILES["Imagen3"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen3"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen3"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

    $target_file = $target_dir. basename($_FILES["Imagen4"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen4"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen4"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

    $target_file = $target_dir. basename($_FILES["Imagen5"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen5"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen5"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

    $target_file = $target_dir. basename($_FILES["Imagen6"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen6"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen6"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

    $target_file = $target_dir. basename($_FILES["Imagen7"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen7"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen7"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

    $target_file = $target_dir. basename($_FILES["Imagen8"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen8"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen8"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

    $target_file = $target_dir. basename($_FILES["Imagen9"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["Imagen9"]["tmp_name"], $target_file)) {
        echo "El archivo " .basename($_FILES["Imagen9"]["name"]) . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arbol de Navidad</title>
</head>

<style>
 body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff;
            margin: 0;
        }

        .arbolNavidad {
            text-align: center;
        }

        .level {
            display: flex;
            justify-content: center;
            margin-bottom: -10px; 
        }

        .level img {
            width: 100px; 
            height: auto;
            margin: 0 5px; 
        }

        .primera {
            margin-top: 0; 
        }

        .segunda {
            margin-top: 0;
        }

        .tercera {
            margin-top: 0;
        }

        .cuarta {
            margin-top: 0;
        }

        .tronco {
            margin-top: -10px; 
        }

        .tronco img {
            width: 40px; 
            height: auto;
        }
 </style>
<body>
<div class="arbolNavidad">
        <div class="primera level">
            <img src="subidas/1.jpg" />
        </div>
        
        <div class="segunda level">
            <img src="subidas/1.jpg" />
            <img src="subidas/1.jpg" />
        </div>

        <div class="tercera level">
            <img src="subidas/1.jpg" />
            <img src="subidas/1.jpg" />
            <img src="subidas/1.jpg" />
        </div>

        <div class="cuarta level">
            <img src="subidas/1.jpg" />
            <img src="subidas/1.jpg" />
            <img src="subidas/1.jpg" />
            <img src="subidas/1.jpg" />
        </div>

        <div class="tronco">
            <img src="subidas/1.jpg" />
        </div>
    </div>
 
</body>
</html>

