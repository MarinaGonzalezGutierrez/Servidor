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

