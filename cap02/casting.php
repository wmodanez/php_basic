<?php

$produto = new stdClass();
$produto->descricao = 'Chocolate Amargo';
$produto->estoque = 100;
$produto->preco = 7.0;

$vetor1 = (array)$produto;
print $vetor1['descricao'] . PHP_EOL;

$vetor2 = ['descricao' => 'Café', 'estoque' => 30, 'preco' => 3.99];
$produto2 = (object)$vetor2;
print $produto2->descricao . PHP_EOL;