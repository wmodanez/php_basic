<?php

require_once 'classes/InterfaceOrcavel.php';
require_once 'classes/Produto.php';
require_once 'classes/Orcamento.php';

$orcamento = new Orcamento();

$orcamento->adiciona(new Produto('Café', 100, 3.85), 10);
$orcamento->adiciona(new Produto('Leite', 100, 3.99), 15);
$orcamento->adiciona(new Produto('Chocolate', 100, 4.15), 22);

print $orcamento->calculaTotal();