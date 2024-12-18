<?php
$directorio = "uploads/";
$rutaArchivo = $directorio . basename($_FILES["archivoSubir"]["name"]);
$tipoExtension= pathinfo($rutaArchivo,PATHINFO_EXTENSION);
$comprobar = getimagesize($_FILES["archivoSubir"]["tmp_name"]);





?>