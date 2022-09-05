<h1>Olá!</h1>
<?php

$codigo = $_GET['codigo'];

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

        $resultado = $resultado + soma($value2);
    }
}

echo "pedido repetido " . $soma . "<br>";

echo "Seu pedido deu $resultado";

function soma($codigo)
{
    switch ($codigo) {
        case '101':
            return 55.90;
        case '102':
            return 51.50;
        case '103':
            return 49.50;
        case '104':
            return 56.90;
        case '105':
            return 54.60;
        case '106':
            return 59.99;
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
        <option value="pix">1 pessoa</option>
        <option value="cartao">2 pessoas</option>
        <option value="boleto">3 pessoas</option>
    </select>
    <button type="submit">Enviar</button>
</form>

<?php
// switch ($opcoes) {
//     case 'pix': {
//        echo $resultado / 1;
//     }
    
//         break;
    
//     default:
//     "erro";
//         break;
// }
?>