<!-- 3. Escribe una función que reciba una cadena y comprueba si es un palíndromo.-->
 <?php
function esPalindromo($cadena) {
    $cadena = strtolower($cadena); // Convertir a minúsculas 
    $longitud = strlen($cadena);
    for ($i = 0; $i < $longitud / 2; $i++) {
        if ($cadena[$i] !== $cadena[$longitud - $i - 1]) {
            return false;
        }
    }
    return true;
}

// Ejemplo de uso:
$palabra = "Así Mario oirá misa";
if (esPalindromo($palabra)) {
    echo "$palabra es un palíndromo";
} else {
    echo "$palabra no es un palíndromo";
}


?>