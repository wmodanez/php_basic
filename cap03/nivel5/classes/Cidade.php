<?php


class Cidade
{
    public static function listAll()
    {
        $servername = 'localhost';
        $username = 'livro';
        $password = '123456';
        $database = 'livro';

        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
            //Solução do problema de caracteres especiais no ambiente Windows.
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT id, nome from cidade ORDER BY nome';
        $result = $conn->query($sql);

        return $result->fetchAll();
    }
}