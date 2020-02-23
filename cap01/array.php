<?php

$cores = ['verde', 'azul', 'preto', 'branco'];

echo $cores[0] . PHP_EOL;

//Array Associativo
$pessoas = array();

$pessoas['nome'] = 'Maria da Silva';
$pessoas['idade'] = 32;

echo $pessoas['nome'] . PHP_EOL;

foreach ($pessoas as $chave => $pessoa) {
    echo "$chave => $pessoa\n";
}

$contato = array();
$contato['nome'] = 'Wesley';
$contato['empresa'] = 'Estado de Goiás';
$contato['peso'] = 83;

$contato['nome'] = 'Modanez';
$contato['empresa'] = 'PGE';
$contato['peso'] -= 3;
print_r($contato);

$a = array('verde', 'azul', 'branco', 'preto');
array_unshift($a, 'amarelo');
array_push($a, 'roxo');

$b = array_reverse($a, true);

foreach ($a as $cor) {
    echo $cor.PHP_EOL;
}

array_shift($a);
array_pop($a);

echo ''.PHP_EOL;
foreach ($a as $cor) {
    echo $cor.PHP_EOL;
}

echo ''.PHP_EOL;
foreach ($b as $cor) {
    echo $cor.PHP_EOL;
}

echo ''.PHP_EOL;
$c = array('verde', 'amarelo');
$d = array('azul', 'branco');
$e = array_merge($c, $d);
print_r($e);

print_r(array_keys($contato));
print_r(array_values($contato));
print 'Quantidade: ' .count($contato);

echo ''.PHP_EOL;
if(in_array('azul', $e)){
    echo 'Cor encontada!';
}

//sort
echo ''.PHP_EOL;
sort($e);
print_r($e);

echo ''.PHP_EOL;
rsort($e);
print_r($e);

//asort
echo ''.PHP_EOL;
asort($a);
print_r($a);

echo ''.PHP_EOL;
arsort($a);
print_r($a);

//ksort
echo ''.PHP_EOL;
ksort($a);
print_r($a);

echo ''.PHP_EOL;
krsort($a);
print_r($a);

//explode/implode

$string = explode('/', '20/05/1977');
print_r($string);
print_r(implode('/', $string));