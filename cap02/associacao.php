<?php

require_once 'classes/Fabricante.php';
require_once 'classes/Produto.php';

$produto = new Produto('Chocolate', 100, 2.99);
$fabricante = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '123456789');

$produto->setFabricante($fabricante);

print "O produto {$produto->getDescricao()} é fabricado por {$fabricante->getNome()}\n";