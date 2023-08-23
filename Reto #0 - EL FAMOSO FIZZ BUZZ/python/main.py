"""
/*
 * Escribe un programa que muestre por consola (con un print) los
 * números de 1 a 100 (ambos incluidos y con un salto de línea entre
 * cada impresión), sustituyendo los siguientes:
 * - Múltiplos de 3 por la palabra "fizz".
 * - Múltiplos de 5 por la palabra "buzz".
 * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
*/
"""

def fizzbuzz():
    for num in range(1, 101):        
        print("fizzbuzz" if (num % 3 == 0 and num % 5 == 0) else "fizz" if num % 3 == 0 else "buzz" if num % 5 == 0 else num, end="\n")

fizzbuzz()