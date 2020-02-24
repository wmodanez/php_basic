<?php


class ContaCorrente extends Conta
{
    protected $limite;

    /**
     * ContaCorrente constructor.
     * @param $limite
     */
    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function retirar($valor){
        if(($this->saldo+$this->limite)>=$valor){
            $this->saldo -= $valor;
        }
        else{
            return false; //Saldo insuficiente
        }
        return true; //Saque realizado com sucesso
    }
}