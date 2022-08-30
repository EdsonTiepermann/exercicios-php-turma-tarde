<?php

$log = "Larissa";
$senha = 0000;

echo $loginDigitado = $_GET['login'];
echo $senhaDigitada = $_GET['senha'];;


if (($loginDigitado == $log) && ($senhaDigitada == $senha)) {
    header("Location: cardapio.php");
} else {
    echo "Login ou senha incorretos";
}

?>

