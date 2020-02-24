<?php

class Produto
{
    public $descricao;
    public $estoque;
    public $preco;
}

$p1 = new Produto();
$p1->descricao = 'Chocolate';
$p1->estoque = 100;
$p1->preco = 3;

$p2 = new Produto();
$p2->descricao = 'Leite';
$p2->estoque = 40;
$p2->preco = 2.4;

var_dump($p1) . PHP_EOL;
var_dump($p2);