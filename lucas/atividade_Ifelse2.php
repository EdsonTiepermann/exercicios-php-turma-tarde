<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 2 - Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado:
A mensagem "Aprovado", se a média alcançada for maior ou igual a seis;
A mensagem "Reprovado", se a média for menor do que seis;
A mensagem "Aprovado com Distinção", se a média for igual a dez. -->

    <input id = "nota1" type = "number">
    <input id = "nota1" type = "number">
    <button onclick = "media()">calcular media</button>
    

    <?php
    function media(){
        var nota1 = parseFloat(document.getElementById("nota1").value);
        var nota2 = parseFloat(document.getElementById("nota2").value);

        var media = (nota1 + nota2) /2;

        if(media >=7)
        if(media ==10)
            return ("Aprovado com Distinção") ;
        else 
            return ("Aprovado" +media);
        else
            alert("Reprovado")
    }





    ?>
    
</body>
</html>