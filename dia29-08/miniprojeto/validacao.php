<?php
session_start();

echo $loginDigitado = $_GET['login'];
echo $senhaDigitada = $_GET['senha'];

$_SESSION['usuario'] = $loginDigitado;

$log = "Larissa";
$senha = 0000;



if (($loginDigitado == $log) && ($senhaDigitada == $senha)) {
    header("Location: cardapio.php");
} else {
    echo "Login ou senha incorretos";
}

?>

