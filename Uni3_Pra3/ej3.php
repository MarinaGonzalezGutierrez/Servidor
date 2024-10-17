
<!-- 3. Escribe una función que reciba una cadena y comprueba si es un palíndromo. -->

<?php

function esPalindromo($palabra){
    
    // Eliminamos espacios, convertimos a minúsculas y eliminamos caracteres no alfanuméricos
   $cadenaLimpia = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $palabra));

   //Comparamos cadena limpia con su reverso gracias a la funcion 'strrev()'
   if($cadenaLimpia === strrev($cadenaLimpia)){ 
    return "La cadena es un palíndromo.";
   } else {
    return "La cadena no es un palíndromo";    
   }
} 

function esPalindromoFor($cadena) {
    $cadenaLimpia = '';
    
    // Convertimos toda la cadena a minúsculas
    $cadena = strtolower($cadena);
    
    // Recorremos cada carácter de la cadena original
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        
        // Comprobamos si el carácter es una letra o un número
        if (ctype_alnum($caracter)) {
            $cadenaLimpia .= $caracter; // Si es válido, lo añadimos a la cadena limpia
        }
    }
    
    // Comparamos la cadena limpia con su reverso
    if ($cadenaLimpia === strrev($cadenaLimpia)) {
        return "La cadena es un palíndromo.";
    } else {
        return "La cadena no es un palíndromo.";
    }
}

// Ejemplo de uso
echo esPalindromo("A man, a plan, a canal, Panama!!");


?>