<?php

class Software
{
    private $id;
    private $nome;
    public static $contador;

    /**
     * Software constructor.
     * @param $nome
     */
    public function __construct($nome)
    {
        self::$contador++;
        $this->id = self::$contador;
        $this->nome = $nome;
        print "Software {$this->id} - {$this->nome}\n";
    }
}

new Software('Gimp');
new Software('JBoss');
new Software('Latep');

echo 'Quantidade de software criada: ' .Software::$contador;