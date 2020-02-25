<?php


class Pessoa
{
    private $nome;
    private $endereco;
    private $nascimento;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $endereco
     * @param $nascimento
     */
    public function __construct($nome, $endereco, $nascimento)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->setNascimento($nascimento);
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
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * @param mixed $nascimento
     */
    public function setNascimento($nascimento)
    {
        $partes = explode('-', $nascimento);
        if (count($partes) == 3) {
            if (checkdate($partes[1], $partes[2], $partes[0])) {
                $this->nascimento = $nascimento;
                return true;
            }
            return false;
        }
        return false;
    }


}

$pessoa = new Pessoa('Maria da Silva', 'Rua 01', '2010-05-01');

print_r($pessoa);