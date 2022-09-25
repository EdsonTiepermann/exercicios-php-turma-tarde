<?php
$codigo = $_GET['opcoes'];
$resultado1 = $_GET['teste'];

// $resultado1 = floatval($_GET['teste']);

echo "<h2><em>CONTA FINAL<em><h2>";

switch ($codigo) {
   
    case '1x': { 
      echo " A conta será $resultado1 ";
      echo "<br>";
      echo number_format($resultado1, 2);
      
      break;
   }
   case '2x': {
      echo " A conta será: " . $resultado1 / 2 . " para cada pessoa. ";
      echo "<br>";
      echo number_format($resultado1, 2);
     break;
    }
     case '3x': {
      echo " A conta será: " . $resultado1 / 3 . " para cada pessoa. ";
      echo "<br>";
      echo number_format($resultado1, 2);
        break;
     }
     
    
    default:
    "erro";
        break;
}
?>
<hr>
<hr>
<h1><em>FIDELIZAÇÃO DE CLIENTE<em></h1>


<h5>OBS: A cada 50 reais, você ganha 1 ponto de cliente fiel!</h5>

<?php

if (($resultado1 >50) && ($resultado1 <99)) {
   echo "<h3>Parabéns, você gastou $resultado1 e ganhou 1 ponto.<h3>";
} if (($resultado1 > 100) && ($resultado1 < 149)) {
   echo "<h3>Parabéns, você gastou $resultado1 e ganhou 2 pontos.<h3>";
} if (($resultado1 > 149) && ($resultado1 < 199)) {
   echo "<h3>Parabéns, você gastou $resultado1 e ganhou 3 pontos.<h3>";
}if (($resultado1 > 200) && ($resultado1 < 249)) {
   echo "<h3>Parabéns, você gastou $resultado1 e ganhou 4 pontos.<h3>";
}if (($resultado1 > 250) && ($resultado1 < 300)) {
   echo "<h3>Parabéns, você gastou $resultado1 e ganhou 5 pontos.<h3>";
}

?>
