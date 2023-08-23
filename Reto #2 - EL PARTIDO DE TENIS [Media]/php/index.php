<?php
/*
 * Escribe un programa que muestre cómo transcurre un juego de tenis y quién lo ha ganado.
 * El programa recibirá una secuencia formada por "P1" (Player 1) o "P2" (Player 2), según quien
 * gane cada punto del juego.
 * 
 * - Las puntuaciones de un juego son "Love" (cero), 15, 30, 40, "Deuce" (empate), ventaja.
 * - Ante la secuencia [P1, P1, P2, P2, P1, P2, P1, P1], el programa mostraría lo siguiente:
 *   15 - Love
 *   30 - Love
 *   30 - 15
 *   30 - 30
 *   40 - 30
 *   Deuce
 *   Ventaja P1
 *   Ha ganado el P1
 * - Si quieres, puedes controlar errores en la entrada de datos.   
 * - Consulta las reglas del juego si tienes dudas sobre el sistema de puntos.   
*/

$scores = ["Love", 15, 30, 40];

function tenis_game(array $points) {
    global $scores;
    $p1_points = 0;
    $p2_points = 0;
    $finished = false;
    $error = false;

    foreach ($points as $player) {

        $error = $finished;
        
        $p1_points += $player == 'P1' ? 1 : 0;
        $p2_points += $player == 'P2' ? 1 : 0;

        if ($p1_points >= 3 and $p2_points >= 3) { // Deuce y Ventajas 
            if (abs($p1_points - $p2_points) <= 1 && !$finished) {
                echo ($p1_points === $p2_points) 
                    ? "Deuce / {$p1_points} - {$p2_points}\n" 
                    : ($p1_points > $p2_points
                        ? "Ventaja P1 / {$p1_points} - {$p2_points}\n"
                        : "Ventaja P2 / {$p1_points} - {$p2_points}\n");
            } else {
                $finished = true;
            }
            
        } else { // Puntos normales
            if ($p1_points < 4 && $p2_points < 4) {
                echo "{$scores[$p1_points]} - {$scores[$p2_points]} / {$p1_points} - {$p2_points}\n";
            } else {
                $finished = true;
            }
        }
    }

    echo ($error || !$finished) 
        ? "Los puntos jugados no son correctos"
        : ($p1_points > $p2_points
            ? "Ha ganado el P1"
            : "Ha ganado el P2");
}

tenis_game(['P1', 'P1', 'P2', 'P2', 'P1', 'P2', 'P1', 'P1']);