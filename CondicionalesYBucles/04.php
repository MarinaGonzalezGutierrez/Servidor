<?php
// Generar dos números aleatorios entre un rango (por ejemplo, entre 1 y 50)
$num1 = rand(1,50);
$num2 = rand(1,50);

// Mostrar los números generados
echo "El primer número es: $num1<br>";
echo "El segundo número es: $num2<br>";

// Identificar el número mayor
if($num1 > $num2){
    $mayor = $num1;
    echo "El número mayor es: $mayor<br>";

}elseif($num2 > $num1){
    $mayor = $num2;
    echo "El numero mayor es : $mayor<br>";

}else{
    echo "Ambos numeros son iguales: $num1<br>";
    $mayor = $num1; // O $num2, ya que son iguales
}

// Verificar si el número mayor es par o impar
if($mayor % 2 == 0){
    echo "El número mayor ($mayor) es par.";
}else{
    echo "El número mayor ($mayor) es inpar.";
}
?>