<?php

require_once 'classes/Cesta.php';
require_once 'classes/Produto.php';

$cesta = new Cesta();

$cesta->addItem($produto = new Produto('Chocolate', 100, 2.99));
$cesta->addItem($produto = new Produto('Café', 100, 5.99));
$cesta->addItem($produto = new Produto('Leite', 100, 3.99));

foreach ($cesta->getItens() as $item) {
    print "Item: {$item->getDescricao()}\n";
}