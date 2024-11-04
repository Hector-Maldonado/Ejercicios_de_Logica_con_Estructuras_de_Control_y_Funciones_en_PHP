<?php 
//Ejercicio 3

/*
Problema de Palíndromos:
Implementa una función llamada esPalindromo 
que determine si una cadena de texto dada es un palíndromo. 
Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones.


*/

// Se define la funcion recibiendo el parametro cadena
function esPalindromo($cadena) {
    // Elimina espacios y convierte a minusculas
    $cadena = strtolower(str_replace(' ', '', $cadena));
    // Compara la cadena original con su reverso para determinar si es palindromo.
    return $cadena === strrev($cadena);
}

// Ejemplo 
$cadena = "Oso";

// llama a la funcion y imprime si es palindromo o no.
print esPalindromo($cadena) ? "La cadena {$cadena} es un palíndromo" : " La cadena {$cadena} no es un palíndromo";  

?>