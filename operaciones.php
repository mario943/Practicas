<?php
// Definir dos números
$num1 = 10;
$num2 = 5;

// Operaciones básicas
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = ($num2 != 0) ? ($num1 / $num2) : "No se puede dividir por cero";

// Mostrar resultados
echo "Suma: $suma<br>";
echo "Resta: $resta<br>";
echo "Multiplicación: $multiplicacion<br>";
echo "División: $division<br>";
?>