<h1>Olá!</h1>
<?php

$codigo = $_GET['codigo'];

$quantidade = $_GET['quantidade'];



$pedidos[] = explode(',', $codigo);
$soma = 0;
$resultado = 0;
foreach ($pedidos as $value) {
    foreach ($value as $value2) {

        // if (in_array("101", $value)) {
        //     $soma ++;
        // }

        print_r($value2);
        echo "<br>";

        $resultado = soma($value2) * $quantidade;
    }
}

echo " " . $soma . "<br>";

echo "Seu pedido deu $resultado";

function soma($codigo)
{
    switch ($codigo) {
        case 'FCC':
            return 55.90 ;
        case 'C':
            return 51.50;
        case 'Quatro Queijos':
            return 49.50;
        case 'CB':
            return 56.90;
        case 'C':
            return 54.60;
            break;
        default:
            echo "Pedido inexistente.";
            die();
            break;
    }
}
?>
<hr>
<?php
echo "Dividir conta em:"
?>

<form action="contafinal.php" method="$_GET">
    <select name="opcoes">
        <option value="1x">1 pessoa</option>
        <option value="2x">2 pessoas</option>
        <option value="3x">3 pessoas</option>
    </select>
    <input type="text" value="<?php echo $resultado; ?>" name="teste">
    <button type="submit">Enviar</button>
</form>
