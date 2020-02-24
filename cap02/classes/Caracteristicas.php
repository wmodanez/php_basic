<?php


class Caracteristicas
{
    private $nome;
    private $valor;

    /**
     * Caracteristicas constructor.
     * @param $nome
     * @param $valor
     */
    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor): void
    {
        $this->valor = $valor;
    }
}