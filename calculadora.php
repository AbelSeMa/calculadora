<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php

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
    $op1 = trim($_GET['operador1']);
    $op2 = trim($_GET['operador2']);
    $op = trim($_GET['operacion']);

    $res = calcular_resultado($op1, $op2, $op);

    ?>

    <p>El resultado de <?= "$op1 $op $op2" ?> es <?= $res ?> </p>
</body>

</html>