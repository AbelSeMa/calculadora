<?php
/**
 * @author Abel Sexto Martínez
 * @copyright Copyright (c) Abel Sexto Martínez
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */


/**
 * Calcula el resultado de hacer la operación de $oper sobre $oper1 y $oper2.
 * 
 * @param mixed $oper1 El primer operando
 * @param mixed $oper2 El segundo operando
 * @param string $oper El operador: Operadores válidos('+', '-', '*', '/')
 * @return mixed El resultado del cáculo.
 */
function calcular_resultado($oper1, $oper2, $oper)
{

    switch ($oper) {
        case '+':
            $resultado = $oper1 + $oper2;
            break;

        case '-':
            $resultado = $oper1 - $oper2;
            break;

        case '*':
            $resultado = $oper1 * $oper2;
            break;

        case '/':
            $resultado = $oper1 / $oper2;
            break;

        default:
            $resultado = 'Error: Operación incorrecta.';
    }
    return $resultado;
}