<?php


class ContaPoupanca extends Conta
{
    public function retirar($valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            return false; // Saque negado
        }
        return true; //Saque feito com sucesso.
    }
}