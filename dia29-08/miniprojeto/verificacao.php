<?php
session_start();
$user = $_SESSION['usuario'];
$codigo = $_GET['codigop'];

$pedidos[] = explode(',', $codigo);

// print_r($pedidos);
$resultado = 0;
foreach ($pedidos as $value) {
  foreach ($value as $value2) {
    // echo $value2."<br>";

    $resultado = $resultado + soma($value2);
  }
}

echo "Os pedidos foram:";









echo "Olá $user, seu pedido deu $resultado";




function soma($codigo)
{
  switch ($codigo) {
    case '100':
      return 12.70;
    case '101':
      return 4.00;
    case '102':
      return 4.60;
    case '103':
      return 15.00;
    case '104':
      return 13.50;
    case '05':
      return 4.50;
      break;
    default:
     echo "Pedido inexistente.";
      die();
      break;
  
  }
}
