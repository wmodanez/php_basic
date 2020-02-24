<?php

require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';

$contas = array();
$contas[] = new ContaCorrente(6677, "CC.1234-5", 100, 500);
$contas[] = new ContaPoupanca(6678, "CP.1234-5", 100);

foreach ($contas as $key => $conta) {
    print "Conta: {$conta->getInfo()}\n";
    print "     Saldo: {$conta->getSaldo()}\n";

    $conta->depositar(200);
    print "     Deposito de R\$200\n";
    print "     Saldo atual: {$conta->getSaldo()}\n";

    if ($conta->retirar(700)) {
        print "     Retirada de R\$700\n";
    } else {
        print "     Retirada de R\$700 não permitida.\n";
    }
    print "     Saldo atual: {$conta->getSaldo()}\n";
}