<?php
function esPalindromo($palabra) {
    if ($palabra == strrev($palabra)) {
        return "Es un palíndromo.";
    } else {
        return "No es un palíndromo.";
    }
}

// Ejemplo de uso
echo esPalindromo("madam"); // Salida: Es un palíndromo.
?>