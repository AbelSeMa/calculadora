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
    $op1 = trim($_GET['operador1']);
    $op2 = trim($_GET['operador2']);
    $op = trim($_GET['operacion']);

    switch ($op) {
        case '+':
            $resultado = $op1 + $op2;
            break;

        case '-':
            $resultado = $op1 - $op2;
            break;

        case '*':
            $resultado = $op1 * $op2;
            break;

        case '/':
            $resultado = $op1 / $op2;
            break;

        default:
        $resultado = 'Error: Operación incorrecta.';
    }

    ?>

    <p>El resultado de <?= "$op1 $op $op2" ?> es <?= $resultado ?> </p>
</body>

</html>