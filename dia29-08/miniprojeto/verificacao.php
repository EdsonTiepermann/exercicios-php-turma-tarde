<?php

$codigo = $_GET['codigop'];
$codigo1 = array('100','101','102', '103', '104', '05');


if (in_array($codigo, $codigo1)) 
    if($codigo == 101){
        // echo 'Bauru Simples R$ 4,00';
return "Bauro 4";
    } else {
    echo 'Valor não existente.';
  }

?>

<?php  ?>