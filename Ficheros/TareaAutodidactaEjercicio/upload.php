<?php
//en q fichero esta
//check = comprobar
$directorio = "uploads/";
//ruta completa de donde esta
$rutaArchivo = $directorio . basename($_FILES["archivoSubir"]["name"]);
$booleano = 1; //variable booleana q comprueba q el fichero se subio
//tipo de extension: txt, jpg, docx
$tipoExtension= pathinfo($rutaArchivo,PATHINFO_EXTENSION);
// Comprobamos si es una imagen real o falsa
 $comprobar = getimagesize($_FILES["archivoSubir"]["tmp_name"]);
 if($comprobar !== false) {
 echo "El fichero es una imagen - " . $comprobar["mime"] . ".";
 $booleano = 1;
 } else {
 echo "El fichero no es una imagen.";
 //aqui cuando el fichero no se subio y explica el porque
 $booleano = 0;
 }
// }
// Comprobamos si el fichero ya existe
if (file_exists($rutaArchivo)) {
    echo "El fichero existe.";
    $booleano = 0;
   }

   // comprobar el tamaño del archivo
   //300*1024
if ($_FILES["archivoSubir"]["size"] > 307200) {
    echo "El fichero es demasiado grande.";
    $booleano = 0;
   }

   // solo aceptar este formato
if($tipoExtension != "txt" ) {
 echo "Lo siento, solo el tipo txt esta permitido.";
 $booleano = 0;
}