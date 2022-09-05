<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios dia 22/08</title>
</head>

<body>

    <h1><em>DIA 22/08</em></h1>
    <!-- Exercício 4 -->

    <form action="aula4.php" method="$_GET">
        <select name="opcoes">
            <option value="pix">Pix</option>
            <option value="cartao">Cartão de crédito</option>
            <option value="boleto">Boleto</option>
        </select>

        <input type="text" id=nome name="login" placeholder="Usuario">
        <input type="text" id=nome name="email" placeholder="E-mail"> <br> <br>
        <input type="date">
        <button type="submit">Enviar</button>
    </form>

</body>

</html>