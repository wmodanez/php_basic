<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        print "Construído o objeto: {$descricao} com {$estoque} itens no estoque a um custo de R\${$preco} cada.\n";
    }

    public function __destruct()
    {
        print "Destruído o objeto: {$this->descricao} com {$this->estoque} itens no estoque a um custo de R\${$this->preco} cada.\n";
    }

    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0) {
            $this->estoque += $unidades;
        }
    }

    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0) {
            $this->estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual)
    {
        if (is_numeric($percentual) and $percentual >= 0) {
            $this->preco *= (1 + ($percentual / 100));
        }
    }

    public function setDescricao($descricao)
    {
        if (is_string($descricao)) {
            $this->descricao = $descricao;
        }
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setEstoque($estoque)
    {
        if (is_numeric($estoque) and $estoque >= 0) {
            $this->estoque = $estoque;
        }
    }

    public function getEstoque()
    {
        return $this->estoque;
    }
}

$p1 = new Produto('Chocolate', 100, 5);
unset($p1);

$p2 = new Produto('Leite', 40, 3.40);
unset($p2);