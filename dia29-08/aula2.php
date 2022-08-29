<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>

<body>
    <h1>Dia 15/08</h1>

    <h2>Exercício 01</h2>

    <?php

    // EXERCICIO 1, COMPLETO.


    $horario = 20;

    if ($horario <= 12) {
        echo "Bom dia";
    }
    if (($horario > 12) && ($horario <= 18)) {
        echo "Boa tarde";
    }
    if (($horario > 18) && ($horario <= 24)) {
        echo "Boa noite";
    }

    ?>

    <hr>
    <hr>

    <h2>Exercício 01</h2>

    <!-- EXERCICIO 2, COMPLETO. -->

    <?php

    $nota1 = 20;
    $nota2 = 50;
    $notatotal = $nota1 + $nota2;

    if (($notatotal >= 60) && ($notatotal < 100)) {
        // echo "A sua nota foi".$notatotal."e vôce foi aprovado.";
        echo "A sua nota foi $notatotal e você foi aprovado.";
    }
    if ($notatotal < 60) {
        echo "A sua nota foi $notatotal e você foi reprovado";
    }
    if ($notatotal == 100) {
        echo "A sua nota foi $notatotal e você foi aprovado com distinção";
    }

    ?>

    <hr>
    <hr>

    <h2>Exercício 03</h2>


    <?php

    $num1 = 22;
    $num2 = 15;
    $num3 = 34;

    

    ?>

    <hr>
    <hr>

    <h2>Exercício 001</h2>

    <!-- EXERCICIO 1, COMPLETO.- Utilizando switch  -->

    <?php

    $numero1 = 2;
    $numero2 = 22;
    $operacao = 'subtração';


    switch ($operacao) {
        case 'soma':
            echo $numero1 + $numero2;
            break;
        case 'multiplicação':
            echo $numero1 * $numero2;
            break;
        case 'divisão':
            echo $numero1 / $numero2;
            break;
        case 'subtração':
            echo $numero1 - $numero2;
            break;
    }

    ?>

    <hr>
    <hr>
    <hr>


    <h1>Dia 19 de agosto.</h1>
    <h2>Exercício num. 2</h2>

    <!-- concluido -->


    <form action="aula2.php" method="post" >
        <input type="text" name="numero1" placeholder="num1" >
        <input type="text" name="numero2" placeholder="num1" >
        <button type="submit">Calcular</button>
    </form>

    <?php


    $nota1 = $_POST['numero1'];
    $nota2 = $_POST['numero2'];
    $notatotal = $nota1 + $nota2;

    if (($notatotal >= 60) && ($notatotal < 100)) {
        echo "A sua nota foi $notatotal e você foi aprovado.";
    }
    if ($notatotal < 60) {
        echo "A sua nota foi $notatotal e você foi reprovado";
    }
    if ($notatotal == 100) {
        echo "A sua nota foi $notatotal e você foi aprovado com distinção";
    }

    ?>

</body>

</html>