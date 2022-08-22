<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 1 - Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário realizar as verificações, se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas escreva boa tarde e se passar das 18 horas até a 0 horas escreva boa noite; -->

    <?php
        function saudacao( $nome = '') {
        date_default_timezone_set('America/São_Paulo');
        $date = $hora('H');
        if( $hora >= 6 && $hora <=12 )
            return 'Bom Dia' . (empty($nome) ? '' : ' , ' . $nome);
        else if ( $hora >= 12 && $hora <=16)
            return 'Boa Tarde' . (empty($nome) ? '' : ' , ' . $nome);
        else
            return 'Boa Noite' . (empty($nome) ? '' : ' , ' . $nome);

        }

        echo saudacao ();
        







    ?>
    
</body>
</html>