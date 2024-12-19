<?php
$target_dir = "subidas/";  // Directorio donde se guardarán los archivos subidos
$target_file = $target_dir. basename($_FILES["archivoSubir"]["name"]);  // Añadimos un prefijo único al nombre del archivo para evitar sobreescribirlo
    if (move_uploaded_file($_FILES["archivoSubir"]["tmp_name"], $target_file)) {
        echo "El archivo " .$target_file . " ha sido subido correctamente.";
    } else {
        echo "Hubo un error al mover el archivo al directorio de destino.";
    }

?>