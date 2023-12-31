<?php
/*
 * Escribe un programa que reciba un texto y transforme lenguaje natural a
 * "lenguaje hacker" (conocido realmente como "leet" o "1337"). Este lenguaje
 *  se caracteriza por sustituir caracteres alfanuméricos.
 * - Utiliza esta tabla (https://www.gamehouse.com/blog/leet-speak-cheat-sheet/) 
 *   con el alfabeto y los números en "leet".
 *   (Usa la primera opción de cada transformación. Por ejemplo "4" para la "a")
*/

define('DICCIONARIO', array(
    "a" => "4",
    "á" => "4",
    "à" => "4",
    "ä" => "4",
    "b" => "I3",
    "c" => "[",
    "d" => ")",
    "e" => "3",
    "é" => "3",
    "è" => "3",
    "ë" => "3",
    "f" => "|=",
    "g" => "&",
    "h" => "#",
    "i" => "1",
    "í" => "1",
    "ì" => "1",
    "ï" => "1",
    "j" => ",_|",
    "k" => ">|",
    "l" => "1",
    "m" => "/\\/\\",
    "n" => "^/",
    "o" => "0",
    "ó" => "0",
    "ò" => "0",
    "ö" => "0",
    "p" => "|*",
    "q" =>  "(_,)",
    "r" => "I2",
    "s" => "5",
    "t" => "7",
    "u" => "(_)",
    "ú" => "(_)",
    "ù" => "(_)",
    "ü" => "(_)",
    "v" => "\\/",
    "w" => "\\/\\/",
    "x" => "><",
    "y" => "j",
    "z" => "2",
    "1" => "L",
    "2" => "R",
    "3" => "E",
    "4" => "A",
    "5" => "5",
    "6" => "b",
    "7" => "T",
    "8" => "B",
    "9" => "g",
    "0" => "0",
));

function transformar_a_lenguaje_hacker($string) {
    // strtr: convierte caracteres o reemplaza substrings
    return strtr(strtolower($string), DICCIONARIO);
}

$inputMessage = "LeET";
// En caso de tener PHP instalado, ejecuta el programa en la terminal.
//$inputMessage = readline("Introduzca el mensaje a traducir: ");

$outputMessage = $inputMessage ? transformar_a_lenguaje_hacker($inputMessage) . "\n" : "Mensaje no introducido \n";

echo $outputMessage;
