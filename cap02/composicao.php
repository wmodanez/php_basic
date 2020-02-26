<?php

require_once 'classes/InterfaceOrcavel.php';
require_once 'classes/Produto.php';
require_once 'classes/Caracteristicas.php';

$produto = new Produto('Chocolate', 100, 2.99);
$produto->addCaracteristica('Cor', 'Marrom');
$produto->addCaracteristica('Peso', 2.6);
$produto->addCaracteristica('Unidade', 'Kg');

print "O produto: {$produto->getDescricao()}, possui as seguintes caracteristicas:" . PHP_EOL;
foreach ($produto->getCaracteristicas() as $caracteristica) {
    print "  {$caracteristica->getNome()} - {$caracteristica->getValor()}\n";
}