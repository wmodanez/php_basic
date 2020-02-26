<?php


class Preferencias
{
    private $data;
    private static $instance;

    /**
     * Preferencias constructor.
     */
    public function __construct()
    {
        $this->data = parse_ini_file('application.ini');
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if(empty(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return array|false
     */
    public function getData($key)
    {
        return $this->data[$key];
    }

    /**
     * @param array|false $data
     */
    public function setData($key, $data): void
    {
        $this->data[$key] = $data;
    }

    public function save(){
        $string = '';
        if($this->data){
            foreach ($this->data as $key => $value) {
                $string .="{$key} = \"{$value}\" \n";
            }
        }
        file_put_contents('application.ini', $string);
    }
}