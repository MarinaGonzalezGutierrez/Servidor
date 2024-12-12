<?php
session_start();

// Verificar si la combinación generada y la ingresada están disponibles
if (!isset($_SESSION['solucion']) || !isset($_SESSION['color1'], $_SESSION['color2'], $_SESSION['color3'], $_SESSION['color4'])) {
    header("Location: inicio.php");
    exit();
}

// Combinación generada
$solucion = $_SESSION['solucion'];

// Combinación ingresada por el usuario
$intentoUsuario = [
    $_SESSION['color1'],
    $_SESSION['color2'],
    $_SESSION['color3'],
    $_SESSION['color4']
];

// Comparar combinaciones
if ($solucion === $intentoUsuario) {
    header("Location: acierto.php");
} else {
    header("Location: fallo.php");
}
exit();
