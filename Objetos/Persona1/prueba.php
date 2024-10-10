<?php
//Importamos la clase Persona.
require_once 'persona.php';
//Creamos el objeto con los valores que se definen en el constructor.
$persona = new Persona('Fernando', 'Gaitan', 26);

echo $persona->saludar();
//Destruimos el objeto.
unset($persona);
?>