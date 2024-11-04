<?php 
/*Problema de la serie Fibonacci:
Escribe una función llamada generar Fibonacci 
que reciba un número n como parámetro 
y genere los primeros n términos de la serie Fibonacci. 
La serie comienza con 0 y 1, 
y cada término subsiguiente es la suma de los dos anteriores. */


//Ejercicio 1
function generarfibonacci($n) {
    // Si n es menor o igual a cero retorname un array vacio
    if ($n <= 0) return []; 
    //Si n es igual a 1, retorname la primera posicion de la serie.
    if ($n === 1) return [0];
    
    //Inicializacion del array con los dos primeros terminos
    $series = [0, 1];
    //Bucle lo inicializamos en el tercer termino que es 2 hasta el termino n.
    for ($i = 2; $i < $n; $i++) {
        //calculamos el termino actual sumando los dos terminos anteriores.
        $series[$i] = $series[$i - 1] + $series[$i - 2];
    }
    //Retornamos el array con los terminos de la serie 
    return $series;
}
//Se hace el llamado a la funcion y se imprimen.
print_r(generarfibonacci(10));

?>