<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aula PHP </h1>
    
    <?php

    $nome = "Larissa";
    $sobrenome = "Dzulinski";

    $nomeCompleto = $nome. " ".$sobrenome;
    // $nomeCompleto = "$nome $sobrenome";
    
    // echo $nomeCompleto

    ?>

    <br>
    <br>
    <br>

    <?php
    



    $Array = [18, 20, 1, 30, 71, 6];


    print_r( value: $Array)

    ?>

    <br>
    <br>
    <br>


    <?php


foreach ($Array as $value) {
    echo " $value";
}
?>


  

    
    
</body>
</html>