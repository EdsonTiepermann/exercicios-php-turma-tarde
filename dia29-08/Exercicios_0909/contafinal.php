<?php
$codigo = $_GET['opcoes'];
$resultado1 = $_GET['resultado'];
switch ($codigo) {
    case 'pix': {
       echo $resultado1 / 1;
    }
    
        break;
    
    default:
    "erro";
        break;
}
?>