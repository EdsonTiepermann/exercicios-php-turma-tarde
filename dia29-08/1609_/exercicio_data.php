<h1><em>Exercício de data.</em></h1>


<?php
echo "Exercícios de data.";
echo "<br>";
//$data = 2022-09-26;
$DiaDaSemana = "segunda-feira";

$horario = strtotime($DiaDaSemana);
echo $horario;

echo date('d/m/Y H:i:s');
echo "<br>";
echo date('l');
echo "<br>";
echo date('d-m-Y', $horario);
?>