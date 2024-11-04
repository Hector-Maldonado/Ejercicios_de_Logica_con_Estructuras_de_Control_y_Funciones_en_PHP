<?php 
/*
Problema de números Primos:
Crea una función llamada esPrimo que determine 
si un número dado es primo o no. 
Un número primo es aquel que solo es divisible por 1 y por sí mismo.

*/


//Ejercicio 2


// Se define la funcion recibiendo el parametro numero y hace la verificacion si es primo
function esPrimo($numero)
{
    //Comprobamos si es un numero valido, y si no que retorne un error. 
    if(!is_numeric($numero))
    return false;
//Bucle inicializado en 2 hasta numero -1
for ($i = 2; $i < $numero; $i++) {
    //Se hace la verificacion si es divisible por i
    //Si el residuo da 0 significa que el numero no es primo y retornamos falso.
    if (($numero % $i) == 0) {
        
        
        return false;
        
    }
    
}

// Si el bucle termina sin encontrar ningun divisor entonces el numero es primo y retornamos verdadero
return true;
}

//Definimos la variable con el valor
$numero = 13;
//Se hace el llamado a la funcion pasandole el argumento numero y luego condicionamos,
//Si la funcion devuelve verdadero imprime n es primo, en caso de que sea falsa devuelve no es primo.
if(esPrimo($numero)){
    print("{$numero} Es primo");
}else{
    print("{$numero} No es primo");
}
?>