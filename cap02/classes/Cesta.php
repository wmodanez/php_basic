<?php


class Cesta
{
    private $time;
    private $itens;

    /**
     * Cesta constructor.
     * @param $time
     * @param $itens
     */
    public function __construct()
    {
        $this->time = date('Y-m-d H:i:s');
        $this->itens = array();
    }

    public function addItem(Produto $produto)
    {
        $this->itens[] = $produto;
    }

    /**
     * @return false|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param false|string $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getItens()
    {
        return $this->itens;
    }

    /**
     * @param mixed $itens
     */
    public function setItens($itens): void
    {
        $this->itens = $itens;
    }
}