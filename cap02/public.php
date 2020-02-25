<?php


class Pessoa
{
    public $nome;
    public $endereco;
    public $nascimento;
}

$pessoa = new Pessoa();
$pessoa->nome = 'Maria da Silva';
$pessoa->endereco = 'Rua 01';
$pessoa->nascimento = '01 de Maio de 2010';
$pessoa->telefone = '(62) 98525-4425';

print_r($pessoa);