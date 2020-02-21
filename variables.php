<?php

$nome = 'João';
$sobrenome = 'da Silva';

echo "$sobrenome, $nome";

$variavel = 'nome';
$$variavel = 'Maria';

echo $nome . '<br>' . PHP_EOL;
echo '<br>' . PHP_EOL;

$a = 5;
$b = $a;
$b = 10;
echo $a;
echo ' ';
echo $b . '<br>' . PHP_EOL;
echo '<br>' . PHP_EOL;

$a = 5;
$b = &$a;
$b = 10;
echo $a;
echo ' ';
echo $b . '<br>' . PHP_EOL;
echo '<br>' . PHP_EOL;

$a = new stdClass();
$a->nome = 'Maria';
$b = $a;
$b->nome = 'Joana';
print "$a->nome" . '<br>' . PHP_EOL;
echo '<br>' . PHP_EOL;
print "$b->nome";
