<?php

class Produto
{
    public $descricao;
    public $estoque;
    public $preco;

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
}

$p1 = new Produto();
$p1->descricao = 'Chocolate';
$p1->estoque = 100;
$p1->preco = 3;
print "O estoque de {$p1->descricao} é de {$p1->estoque}\n";
print "O preço de {$p1->descricao} é de {$p1->preco}\n";

$p1->aumentarEstoque(10);
print "O estoque de {$p1->descricao} é de {$p1->estoque}\n";
$p1->diminuirEstoque(5);
print "O estoque de {$p1->descricao} é de {$p1->estoque}\n";
$p1->reajustarPreco(45);
print "O preço de {$p1->descricao} é de {$p1->preco}\n";
