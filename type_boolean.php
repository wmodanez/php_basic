<?php
$exibirNome = TRUE;

IF ($exibirNome) {
    print 'José da Silva' . '<br>' . PHP_EOL;
}

$umidade = 91;

$vaiChover = ($umidade > 90);

if ($vaiChover) {
    print 'Vai chover' . '<br>' . PHP_EOL;
}