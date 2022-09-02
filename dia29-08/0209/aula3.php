<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Aula dia 19/08</h1>
    <h2>Exercício 3</h2>

    <form action="aula3.php" method="$_post">
        <input type="text" id=login name="log" placeholder="login">
        <input type="password" id=senha name="senha" placeholder="Senha">
        <button type="submit">Enviar</button>

    </form>

    <?php

    $aluno = $_POST['log'];
    $senha = $_POST['senha'];

    if (($aluno == 'aluno') && ($senha == 'desenv')) {
        echo "Login realizado ";
    } else {
        echo "Login negado";
    }


    ?>
</body>

</html>