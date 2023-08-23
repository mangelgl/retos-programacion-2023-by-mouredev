<?php
/*
 * Escribe un programa que sea capaz de generar contraseñas de forma aleatoria.
 * Podrás configurar generar contraseñas con los siguientes parámetros:
 * - Longitud: Entre 8 y 16.
 * - Con o sin letras mayúsculas.
 * - Con o sin números.
 * - Con o sin símbolos.
 * (Pudiendo combinar todos estos parámetros entre ellos)
*/

/**
 * @param array $params Lista de parámetros para generar la contraseña
 * 
 * @return string Contraseña generada
 */
function generar_contraseña(array $params) {
    $longitud = (intval($params[0]) >= 0 && intval($params[0]) <= 16) ? intval($params[0]) : 0;
    $mayus = intval($params[1]);
    $numeros = intval($params[2]);
    $simbolos = intval($params[3]);
    $password = "";

    $plantilla = "abcdefghijklmnñopqrstuvwxyz";
    $mayus === 1 ? $plantilla .= "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ" : 0;
    $numeros === 1 ? $plantilla .= "0123456789" : 0;
    $simbolos === 1 ? $plantilla .= "@#!¡$%&.-_*" : 0;

    if ($longitud == 0) {
        return "Elija una longitud de contraseña entre 8 y 16 caracteres";
    }

    for ($i=0; $i < $longitud; $i++) { 
        $password .= $plantilla[random_int(0, strlen($plantilla))];
    }
    
    return $password;
}

echo "Password generated: " . generar_contraseña([8,1,1,1]);