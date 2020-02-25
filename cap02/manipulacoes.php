<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;

    /**
     * Funcionario constructor.
     * @param $nome
     * @param $salario
     * @param $departamento
     */
    public function __construct($nome, $salario, $departamento)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->departamento = $departamento;
    }

    function setSalario()
    {
    }

    function getSalario()
    {
    }

    function setNome()
    {
    }

    function getNome()
    {
    }
}

class Estagiario extends Funcionario
{
    public $bolsa;

    /**
     * Estagiario constructor.
     * @param $bolsa
     */
    public function __construct($nome, $salario, $departamento, $bolsa)
    {
        parent::__construct($nome, $salario, $departamento);
        $this->bolsa = $bolsa;
    }

}

$funcionario = new Funcionario('José da Silva', 2000, 'Financeiro');
$estagiario = new Estagiario('João da Silva', 0, 'TI', 900);


print_r(get_class_methods(Funcionario::class));
print_r(get_object_vars($funcionario));
echo get_class($funcionario) . PHP_EOL;
echo get_class($estagiario) . PHP_EOL;
echo get_parent_class($funcionario) . PHP_EOL;
if (is_subclass_of($estagiario, 'Funcionario')) {
    echo 'A classe do objeto estagiário é derivada de Funcionario' . PHP_EOL;
}
if (is_subclass_of('Estagiario', 'Funcionario')) {
    echo 'A classe Estagiario é derivada de Funcionario' . PHP_EOL;
}
if (method_exists($funcionario, 'getNome')) {
    echo 'Existe o método getNome na classe Funcionario' . PHP_EOL;
}