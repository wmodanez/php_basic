<?php

class Software
{
    private $id;
    private $nome;
    private static $contador;

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

    public static function getContador()
    {
        return self::$contador;
    }
}

new Software('Gimp');
new Software('JBoss');
new Software('Latep');

echo 'Quantidade de software criada: ' .Software::getContador();