<?php

class Pessoa
{
    private $nome;
    private $genero;

    const GENEROS = array('M' => 'Masculino', 'F' => 'Feminino');

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $genero
     */
    public function __construct($nome, $genero)
    {
        $this->nome = $nome;
        $this->genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return self::GENEROS[$this->genero];
    }
}

$pessoa1 = new Pessoa('Maria da Silva', 'F');
$pessoa2 = new Pessoa('João da Silva', 'M');

print "Nome: {$pessoa1->getNome()}, Sexo: {$pessoa1->getGenero()}\n";
print "Nome: {$pessoa2->getNome()}, Sexo: {$pessoa2->getGenero()}\n";

print_r(Pessoa::GENEROS);