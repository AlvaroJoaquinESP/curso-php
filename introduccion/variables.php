<?php
$variable = "luis";

$url = "www.google.com";
echo "<h3>dirección</h3>";
echo $url;
echo "<br>";

// Cambiando el valor de una variable

$url = "www.youtube.com";   
echo $url;
echo "<br>";

// String + concatenar

$apellidos = "Albarracin";
$message = "buenas tardes";

print "$apellidos: $message";
echo "<br>";


// int
$estatura = 185;
echo "Estatura: $estatura";
echo "<br>";

// plus

$num1 = 1;
$num2 = 2;

$total = $num1 + $num2;

echo $total;
echo "<br>";

function sumar() {
    $var1 = 356;
    $var2 = 355;
    $totalplus = $var1 + $var2;
    echo "La suma es " . $totalplus;
}

sumar();
echo "<br>";

function restar() {
    $var1 = 50;
    $var2 = 20;
    $totalminus = $var1 - $var2;
    echo "La resta es " . $totalminus;
}

restar();
echo "<br>";

// variable local SCOPE(Alcance)
$contacto = "Jhon Charlie";

function mostrarContacto() {
    $contacto = "Juan Carlos";
    echo $contacto;
    
}

echo "<br>";
mostrarContacto();
echo "<br>";
echo $contacto;


// variables globales

global $mensaje;
$mensaje = "hello";

function mostrarContacto2() {
    global $mensaje;
    echo $mensaje;
    
}

echo "<br>";
mostrarContacto2();
echo "<br>";
echo $mensaje;
echo "<br>";


// constantes

define('CUOTA', '2000');

$valorCuota = CUOTA;
echo "El valor de la cuota: $valorCuota";
echo "<br>";
echo "<br>";
echo "El valor de la cuota:" . CUOTA . "<br>";



?>