<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco)
    {
        if (is_string($descricao)) {
            $this->descricao = $descricao;
        }

        if (is_numeric($estoque) and $estoque >= 0) {
            $this->estoque = $estoque;
        }

        if (is_numeric($preco) and $preco >= 0) {
            $this->preco = $preco;
        }
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

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}

$p1 = new Produto('Chocolate', 100, 5);
print "O estoque de {$p1->getDescricao()} é de {$p1->getEstoque()} e o preço é R\${$p1->getPreco()}\n";