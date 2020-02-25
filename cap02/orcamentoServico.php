<?php

require_once 'classes/InterfaceOrcavel.php';
require_once 'classes/Servico.php';
require_once 'classes/Orcamento.php';

$orcamento = new Orcamento();

$orcamento->adiciona(new Servico('Manicure', 3.85), 10);
$orcamento->adiciona(new Servico('Corte de cabelo', 3.99), 15);
$orcamento->adiciona(new Servico('Limpeza de pele', 4.15), 22);

print $orcamento->calculaTotal();