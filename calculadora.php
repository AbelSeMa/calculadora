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
    require 'auxiliar.php';

    $op1 = trim($_GET['operador1']);
    $op2 = trim($_GET['operador2']);
    $op = trim($_GET['operacion']);

    $res = calcular_resultado($op1, $op2, $op);

    ?><form action="" method="get">
    <div>
        <label>
            Primer operando:
            <input type="text" name="operador1">
        </label>
    </div>
    <div>
        <label>
            Segundo operando:
            <input type="text" name="operador2">
        </label>
    </div>
    <div>
        <label>
            Operacion:
            <input type="text" name="operacion">
        </label>
    </div>
    <button type="submit">Calcular</button>
</form>



    <p>El resultado de <?= "$op1 $op $op2" ?> es <?= $res ?> </p>
    <button> <a href="calculadora.html">Volver</a> </button>
</body>

</html>