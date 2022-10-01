<?php
  echo"Recursiva <br><br>";


  function dividir($numero){
      $result = $numero / 2;
      echo "$numero <br>";

      if ($result  > 0) {
          if (round(num: $result) > 0){
              dividir(numero: $result);
              
          }
      }
  }

  dividir(numero:50);
//......................................................................................................................
  echo"<br> Absoluto <br>";
  $num = -9.5;

  echo $num. "<br>";
  echo abs(num: $num);


  echo"<br><br> Pi <br>";

  echo pi();

//......................................................................................................................
  echo"<br><br> Arredondar num para baixo <br>";

  $n = 2.8;
  echo $n."<br>";

  echo floor(num: $n);

//..........................................................................................................................
  echo"<br><br> Arredondar para cima <br>";
  $n2 = 3.3;
  echo "<br>".$n2."<br>";

  echo ceil(num: $n2);

  //...........................................................................................................................
  echo"<br><br> Arredondar<br>";
  $n3 = 3.6;
  echo"<br>".$n3. "<br>";

  echo round(num: $n3);

  //................................................................................................................................
  echo"<br><br> Arredondar casas decimais <br>";
  $n4 = 3.653647;
  echo "<br>".$n4."<br>";

  echo round($n4, 2);

//...........................................................................................................
  echo"<br><br> Número aleatótio <br>";

  $randomico = rand(min: 2, max: 100);

  echo $randomico;

//...................................................................................................................
  echo"<br><br> Número num maior";

  $nMaior = [3, 6, 8, 9, 10, 15, 25];

  echo max( value: $nMaior);

  //.................................................................................................................
  echo"<br><br> Número num menor <br>";

  $nMenor = [2, 3, 6, 1, 3, 6, 4, 7];



  //.................................................................................................................
  echo"<br><br> Manipulação de string <br>";
  echo"<br> Retirar espaços <br>";

  $nomeComEspaço = "        Edson        ";

  echo "teste<br>".$nomeComEspaço;

  $nomeSemEspaço = trim( string: $nomeComEspaço);

  echo "<br> com espaço ".strlen( string: $nomeComEspaço);





//...................................................................................................................
  echo"<br><br> lower case <br>";


  $nome1 = "Larissa Dzulinski";

  echo "<br>".strtolower( string: $nome1);
  echo"<br><br> UPPER case <br>";

  echo "<br>".strtoupper( string: $nome1);



//...................................................................................................................
  echo "<br><br> Escolher algumas strings <br>";


$nome2 = "Dzulinski";

echo "<br>".$nome2;
echo"<br>".substr( string: $nome2, offset:1, length: 5);
echo "<br>".substr(string: $nome2, offset: -5, length: 3);

//...................................................................................................................
echo"<br><br> Procurar algo na string <br>";

echo $posicao = strpos( haystack: $nome2, needle: 'e');

//...................................................................................................................
echo"<br><br> Transformar o nome no array <br>";


echo $nomeCompleto = "Larissa Laynara Dzulinski<br>";
$nomeArray = explode( separator: " ", string: $nomeCompleto);

print_r( value: $nomeArray);

//..................................................................................................
echo"<br><br> Formatar números <br>";

$numeroFormatar = 2569.5555;

echo"<br>".$numeroFormatar;
echo"<br>".number_format( num: $numeroFormatar, decimals: 2, decimal_separator: ',', thousands_separator: '.');

//.......................................................................................................

echo"<br><br> Contar quantas posições tem no array <br>";

$listaArray = [1, "Larissa", 211, "Odonto", "Lions"];

echo "Total: ".count( value: $listaArray);

//......................................................................................................

echo"<br><br> Diferença entre os arrays <br>";

$listaAlunos = ["Robinson", "Edson",  "Rodrigo", "Odonto", "Lions"];
$alunosAprovados = ["Robinson", "Edson"];

$reprovados = array_diff($listaAlunos, $alunosAprovados);

print_r($reprovados);

//...................................................................................................................

echo"<br><br> Filtrar no array <br>";
//contém true or false.
$numArray = [1, 112, 25, 36, 85];

$filtrados = array_filter($numArray, function($item){
  if ($item < 86) {
    return true;
  } else {
    return false;
  }
});

print_r($filtrados);

//...................................................................................................................

echo"<br><br> Alteração de array <br>";
$numArray = [1, 112, 25, 36, 85];

$resultado2 = array_map(function($item) {
  return $item * 2;

}, $numArray);

print_r($resultado2);

//...................................................................................................................

echo"<br><br> Remove o ultimo item do array <br>";
$numArray = [1, 112, 25, 36, 85];
array_pop($numArray);

print_r($numArray);

//...................................................................................................................

echo"<br><br> Remove o ultimo item do array <br>";

$numArray = [1, 112, 25, 36, 85];

array_shift($numArray);

print_r($numArray);

//...................................................................................................................

echo "<br><br> Buscar algo no array <br>";

$numArray = [1, 112, 25, 36, 85];

if(in_array(35, $numArray)) {
  echo "Tem.";

} else {
  echo "Não tem.";
}

//...................................................................................................................

echo "<br><br> Buscar algo no array se tiver retorna a posição <br>";

$numArray = [1, 112, 25, 36, 85];

$pos = array_search(36, $numArray);

echo $pos;

//...................................................................................................................

echo "<br><br> Ordenação em ordem crescente <br>";

$numArray = [1, 112, 25, 36, 85];

sort($numArray);

print_r($numArray);

//...................................................................................................................

echo "<br><br> Ordenação em ordem decrescente <br>";

$numArray = [1, 112, 25, 36, 85];

rsort($numArray);

print_r($numArray);

//...................................................................................................................

echo "<br><br> Ordenação em ordem crescente mantendo a chave  <br>";

$numArray2 = [1, 112, 90, 25, 36, 85];

arsort($numArray2);

print_r($numArray2);

//...................................................................................................................

echo "<br><br> Ordenação em ordem decrescente mantendo a chave  <br>";

$numArray3 = [1, 112, 90, 25, 36, 85];

arsort($numArray3);

print_r($numArray3);

//...................................................................................................................

echo "<br><br> Destruindo um array e montando uma string <br>";

$arrayNomeCompleto = ["Larissa", "Laynara", "Dzulinski."];

print_r($arrayNomeCompleto);

$string = implode("   ", $arrayNomeCompleto);

echo "<br><br> String montada: $string";

//...................................................................................................................


?>