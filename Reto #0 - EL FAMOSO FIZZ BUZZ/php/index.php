<?php
/*
 * Escribe un programa que muestre por consola (con un print) los
 * números de 1 a 100 (ambos incluidos y con un salto de línea entre
 * cada impresión), sustituyendo los siguientes:
 * - Múltiplos de 3 por la palabra "fizz".
 * - Múltiplos de 5 por la palabra "buzz".
 * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
*/

/**
 * @return string Secuencia de números del 1 al 100 con el challengue 'fizzbuzz' integrado.
 */
function fizzbuzz() {
    $salida = "";
    for ($i=1; $i <= 100; $i++) { 
        $numero = (($i % 3 == 0) & ($i % 5 == 0)) 
                    ? "fizzbuzz"
                    : (($i % 5 == 0)
                        ? "buzz"
                        : (($i % 3 == 0)
                            ? "fizz"
                            : $i
                        )
                    );
        $salida .= ($numero . "\n");
    }
    return $salida;
}

$fizzbuzz_challenge = fizzbuzz();
echo "Fizzbuzz Challenge: \n" . $fizzbuzz_challenge;