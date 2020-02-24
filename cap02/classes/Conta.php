<?php


class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    /**
     * Conta constructor.
     * @param $agencia
     * @param $conta
     * @param $saldo
     */
    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        if ($saldo >= 0) {
            $this->saldo = $saldo;
        }
    }

    public function getInfo()
    {
        return "Agência: {$this->agencia}, Conta: {$this->conta}";
    }

    public function depositar($valor)
    {
        if ($valor >= 0) {
            $this->saldo += $valor;
        }
    }

    /**
     * @return mixed
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * @param mixed $agencia
     */
    public function setAgencia($agencia): void
    {
        $this->agencia = $agencia;
    }

    /**
     * @return mixed
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * @param mixed $conta
     */
    public function setConta($conta): void
    {
        $this->conta = $conta;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

}