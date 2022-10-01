<?php $teste = round($num, 2);

//.........................................................
echo '<br> Array MAP<br>';
 function functionArrayMAP($item){
     if ($item === "Edson") {
         return "{$item} - Professor da tarde. É o Edson";
     }elseif ($item) {
        return"{$item} - Professor da noite. Quebrou a caneca";
     }elseif ($item === "Felipe") {
         return"{$item} - Aluno da noite";
    }elseif ($item === "Leonardo") {
        return"{$item} - Aluno da tarde";
     }
    
}

$arrayParaMapear = array("Edson", "Robinson", "Felipe", "Lonardo");



//.............................................................
echo '<br> ARRAYS<BR>';
$Filmes =[
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

//.........................................................
echo'array map';
$FilmesDepoisDosImpostos = array_map(function ($item) {
    $filme['faturamento_us'] -= $filme['faturamento_us'] * 0.06;
    $filme['faturamento_br'] -= $filme['faturamento_br'] * 0.16;
    return $filme;
}, $Filmes);


echo"<pre>";

print_r($FilmesDepoisDosImpostos);
echo"</pre>";
echo '<hr>';

//.........................................................
echo'array filter';
$FilmesNotaMenorQueOito = array_filter($Filmes, function ($filme){ 
    return $filme['imdb'] < 8;

});
echo"<pre>";
print_r($FilmesNotaMenorQueOito);
echo"</pre>";
echo '<hr>';

//.........................................................
echo 'array reduce';
$totalfaturamentoBR = array_reduce($filmes, function($total, $fime) {
    $total += $filme['faturamento_BR'];
    return $total;
}, 0);

var_dump($totalfaturamentoBR);
echo '<hr>';
echo number_format($totalfaturamentoBR, 2, ',', '.');
echo '<hr>';

//.........................................................
//.........................................................
echo "<br><br> Datas 01-01-1970";

date_default_timezone_set('America/São Paulo');

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

//.........................................................
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

?>