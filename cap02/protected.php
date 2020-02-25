<?php


class Pessoa
{
    protected $nome;

    /**
     * Pessoa constructor.
     * @param $nome
     */
    public function __construct($nome)
    {
        $this->nome = $nome;
    }

}

class Funcionario extends Pessoa
{
    private $cargo, $salario;

    public function contrata($cargo, $salario)
    {
        if (is_numeric($salario) and $salario >= 0) {
            $this->cargo = $cargo;
            $this->salario = $salario;
        }
    }

    public function getInfo()
    {
        return "Nome: {$this->nome}, Salário: {$this->salario}";
    }
}

$pessoa = new Funcionario('Maria de Jesus');
$pessoa->contrata('Caixa', 4500);
print $pessoa->getInfo();

$pessoa = new Pessoa('Maria da Silva', 'Rua 01', '2010-05-01');
