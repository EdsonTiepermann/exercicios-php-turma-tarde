<?php 
   // funções recursivas
   echo"Recursiva <br><br>";

   function dividir($numero) {
      $result = $numero / 2;
      echo "$numero <br>";

      // if ($result > 0) {
      if (round($result) > 0) {
         dividir($result);
      }
   }

   dividir(50);
   //------------------------------------------------------------------------------
   //função número absoluto (num positivo)
   echo"<br> Absoluto <br>";
   $num = -9.5;

   echo $num."<br>";
   echo abs($num);

//------------------------------------------------------------------------------
//função número absoluto (num positivo)
echo"<br><br> Pi <br>";

echo pi();

//------------------------------------------------------------------------------
//função arredondar núm p baixo
echo"<br><br> Arredondar num para baixo <br>";

$n = 2.8; 
echo $n."<br>"; 

echo floor($n);

echo"<br><br> Arredondar num para cima <br>";
$n2 = 3.3; 
echo "<br>".$n2."<br>"; 

echo ceil($n2);

echo"<br><br> Arredondar<br>";
$n3 = 3.5; 
echo "<br>".$n3."<br>"; 

echo round($n3);

echo"<br><br> Arredondar casas decimais <br>";
$n4 = 3.653647; 
echo "<br>".$n4."<br>"; 

$testePi = pi();
echo "<br>".$testePi;
echo round($n4, 2);
echo "<br>".round($testePi, 4);

//------------------------------------------------------------------------------
//função num aleatório
echo"<br><br> Número aleatório <br>";

$randomico = rand(2, 100);

echo $randomico;

//------------------------------------------------------------------------------
//função num menor e maior do array
echo"<br><br> Número num maior <br>";

$nMaior = [3, 6, 8, 9, 10, 15, 25];

echo max($nMaior);

echo"<br><br> Número num menor <br>";

$nMenor = [2, 3, 6, 1, 3, 6, 4 ,7];

echo min($nMenor);

//------------------------------------------------------------------------------
//função retirar espeços
echo"<br><br> Manipulação de string <br>";
echo"<br> Retirar espaços <br>";

$nomeComEspaço = "   Edson      ";

echo "teste<br>".$nomeComEspaço;

$nomeSemEspaço = trim($nomeComEspaço);

echo "<br> com espaço ".strlen($nomeComEspaço);
echo "<br> Sem espaço ".strlen($nomeSemEspaço);

//------------------------------------------------------------------------------
//função lower/upper
echo"<br><br> lower case <br>";

$nome1 = "Edson Tiepermann";

echo "<br>".strtolower($nome1);
echo"<br><br> UPPER case <br>";

echo "<br>".strtoupper($nome1);

//------------------------------------------------------------------------------
//função recuperar alguns caracteres
echo"<br><br> Escolher algumas strings <br>";

$nome2 = "Tiepermann";

echo "<br>".$nome2;
echo "<br>".substr($nome2, 1, 5);
echo "<br>".substr($nome2, -5, 3);

//------------------------------------------------------------------------------
//função recuperar alguns caracteres
echo"<br><br> Procuprar algo na string <br>";

echo $posicao = strpos($nome2, 'e');

//------------------------------------------------------------------------------
echo"<br><br> Transformar o nome no array <br>";

echo $nomeCompleto = "Edson Luiz Tiepermann Junior<br>";
$nomeArray = explode(" ",$nomeCompleto );

print_r($nomeArray);

//------------------------------------------------------------------------------
echo"<br><br> Formatar números <br>";

$numeroFormatar = 2569.5555;
echo"<br>".$numeroFormatar;
echo "<br>".number_format($numeroFormatar, 2, ',', '.');

//------------------------------------------------------------------------------
echo"<br><br> Contar quantas posições tem no array <br>";

$listaArray = [1, "Edson", 211, "Odonto", "Lions"];

echo "Total: ".count($listaArray);

//------------------------------------------------------------------------------
echo"<br><br> Diferença entre os arrays <br>";

$listaAlunos =     ["Robinson", "Edson", "Rodrigo", "Odonto", "Lions"];
$alunosAprovados = ["Robinson", "Edson"];

$reprovados = array_diff($listaAlunos, $alunosAprovados);

print_r($reprovados);

//------------------------------------------------------------------------------
echo"<br><br> Filtrar algo no array <br>";
//deve conter true or false
$numArray = [1, 112, 25, 36, 85];

$filtrados = array_filter($numArray, function($item) {
   if($item < 86) {
      return true;
   }else {
      return false;
   }
});

print_r($filtrados);

//------------------------------------------------------------------------------
echo"<br><br> Alteração de array <br>";
//não serve para realizar filtros
$numArray = [1, 112, 25, 36, 85];

$resultado2 = array_map( function($item) {
   return $item * 2;
   
}, $numArray);

print_r($resultado2);

//------------------------------------------------------------------------------
echo"<br><br> Remove o ultimo item do array <br>";

$numArray = [1, 112, 25, 36, 85];

array_pop($numArray);

print_r($numArray);

//------------------------------------------------------------------------------
echo"<br><br> Remove o primeiro item do array <br>";

$numArray = [1, 112, 25, 36, 85];

array_shift($numArray);

print_r($numArray);

//------------------------------------------------------------------------------
echo"<br><br> Buscar algo no array <br>";

$numArray = [1, 112, 25, 36, 85];

if (in_array(112, $numArray)) {
   echo "Tem";
} else {
   echo "Não tem";
}

//------------------------------------------------------------------------------
echo"<br><br> Buscar algo no array se tiver retorna a posição <br>";

$numArray = [1, 112, 25, 36, 85];

$pos = array_search(36, $numArray);

echo $pos;

//------------------------------------------------------------------------------
echo"<br><br> Ordenação em ordem crescente <br>";

$numArray = [1, 112, 25, 36, 85];

sort($numArray);

print_r($numArray);

//------------------------------------------------------------------------------
echo"<br><br> Ordenação em ordem decrescente <br>";

$numArray = [1, 112, 25, 36, 85];

rsort($numArray);

print_r($numArray);

//------------------------------------------------------------------------------
echo"<br><br> Ordenação em ordem crescente mantendo a chave<br>";

$numArray3 = [1, 112, 90, 25, 36, 85];

asort($numArray3);

print_r($numArray3);

//------------------------------------------------------------------------------
echo"<br><br> Ordenação em ordem decrescente mantendo a chave<br>";

$numArray3 = [1, 112, 90, 25, 36, 85];

arsort($numArray3);

print_r($numArray3);

//------------------------------------------------------------------------------
echo"<br><br> Destruindo um array e montando uma string <br>";

$arrayNomeCompleto = ["Edson", "Luiz", "Tiepermann", "Junior"];

print_r($arrayNomeCompleto);

$string = implode(" ", $arrayNomeCompleto);

echo "<br><br> String montada:  $string";

//------------------------------------------------------------------------------
//------------------------------------------------------------------------------


/* NEW 
 */
echo '<br>ARRAY MAP<br>';
function functionArrayMap($item)
{
   if ($item === "Edson") {
      return "{$item} - Professor da tarde. É o Edson";
   } elseif ($item === "Robinson") {
      return "{$item} - Professor da Noite. Quebrou a Caneca";
   } elseif ($item === "Felipe") {
      return "{$item} - Aluno da Noite.";
   } elseif ($item === "Leonardo") {
      return "{$item} - Aluno da tarde, infiltrado na noite.";
   }
}

$arrayParaMapear = array("Edson", "Robinson", "Felipe", "Leonardo");
echo "<pre>";
print_r(array_map("functionArrayMap", $arrayParaMapear));
echo "</pre>";

//ARRAYS

echo '<br>ARRAYS<br>';
$filmes = [
   [
      'titulo' => 'Vingadores: Ultimato',
      'imdb' => 8.4,
      'faturamento_us' => 858300000,
      'faturamento_br' => 85660000
   ],
   [
      'titulo' => 'Avatar',
      'imdb' => 7.8,
      'faturamento_us' => 760500000,
      'faturamento_br' => 58210000
   ],
   [
      'titulo' => 'Titanic',
      'imdb' => 7.8,
      'faturamento_us' => 659360000,
      'faturamento_br' => 70460000
   ],
];

//array_map 
/* A função array_map tem como objetivo percorrer todo o array e mapear cada um dos itens processando-os com o que é pedido, 
 * e gerando um novo array com os novos valores.
 */

// vamos supor que o valor total das arrecadações são valores brutos, e que nós vamos descontar os impostos para mostrar o valor líquido. 
// Vamos usar os valores fictícios de 16% para o Brasil e 6% para os Estados Unidos.
echo 'array map';
$filmesDepoisDosImpostos = array_map(function ($filme) {
   $filme['faturamento_us'] -= $filme['faturamento_us'] * 0.06;
   $filme['faturamento_br'] -= $filme['faturamento_br'] * 0.16;
   return $filme;
}, $filmes);

echo "<pre>";
// var_dump($filmesDepoisDosImpostos);
print_r($filmesDepoisDosImpostos);
echo "</pre>"; 
echo '<hr>';

//array_filter
/* A função array_filter tem como objetivo filtrar os itens do array que atendam a uma condição estipulada dentro da função, 
 * e gerando um novo array apenas com os itens filtrados.
 */
echo 'array filter';
$filmesNotaMenorQueOito = 
array_filter($filmes, function ($filme) {
   return $filme['imdb'] < 8;
});
echo "<pre>";
print_r($filmesNotaMenorQueOito);
echo "</pre>";
echo '<hr>';

//array_reduce
/* A função array_reduce tem como objetivo reduzir o array a um único valor utilizando alguma operação aritmética.
 */
echo 'array reduce';
$totalFaturamentoBR = 
array_reduce($filmes, function ($total, $filme) {
   $total += $filme['faturamento_br'];
   return $total;
}, 0);

var_dump($totalFaturamentoBR);
echo '<hr>';
echo number_format($totalFaturamentoBR, 2, ',', '.');
echo '<hr>';

//------------------------------------------------------------------------------
//------------------------------------------------------------------------------ 

// echo "<br><br> Datas 01-01-1970";
//no geral se trabalha com milesegundos 01011970(comçam a contar em 1970)
date_default_timezone_set('America/Sao_Paulo');

echo '<br>';
echo time();
echo '<br>';

echo date('y');
echo date('l');

echo '<br>';

echo date('d/m/Y');
echo '<br>';
echo date('d/m/Y H:i:s');
echo '<br>';

//------------------------------------------------------------------------------
echo "<br><br> Manipulando data, formato internacional";
echo '<br>';
$data = '2022-02-14';

echo "$data data de inicio do curso";
echo '<br>';

$milesegundos = strtotime($data);
echo $milesegundos;
echo '<br>';
echo date('d-m-Y', $milesegundos); 

echo '<br>';
echo '<br>';

//-----------------------------------------------------------------------------------
echo "<br><br> Diferença entre datas";
echo '<br>';

$dataInicioAno = "2022-01-01";
$dataHj = date('Y-m-d');

$difDatas = abs((strtotime($dataInicioAno) - strtotime($dataHj)));

echo $dias = floor($difDatas / (60 * 60 * 24));

?>


