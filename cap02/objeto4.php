<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

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

$p1 = new Produto();
$p1->setDescricao('Chocolate');
$p1->setEstoque(100);
print "O estoque de {$p1->getDescricao()} é de {$p1->getEstoque()}\n";