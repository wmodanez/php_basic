<?php

class Pessoa
{
    public static function save($pessoa)
    {
        $servername = 'localhost';
        $username = 'livro';
        $password = '123456';
        $database = 'livro';

        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
            //Solução do problema de caracteres especiais no ambiente Windows.
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (empty($pessoa['id'])) {
            $sql = "INSERT INTO pessoa (nome, endereco, bairro, telefone, email, id_cidade)
                            VALUES ('{$pessoa['nome']}', '{$pessoa['endereco']}', '{$pessoa['bairro']}',
                                    '{$pessoa['telefone']}', '{$pessoa['email']}', '{$pessoa['id_cidade']}')";
        } else {
            $sql = "UPDATE pessoa SET nome = '{$pessoa['nome']}', endereco = '{$pessoa['endereco']}',
                            bairro = '{$pessoa['bairro']}', telefone = '{$pessoa['telefone']}', email = '{$pessoa['email']}',
                            id_cidade = '{$pessoa['id_cidade']}' WHERE id = '{$pessoa['id']}' ";

        }
        return $conn->query($sql);
    }

    public static function find($id)
    {
        $servername = 'localhost';
        $username = 'livro';
        $password = '123456';
        $database = 'livro';

        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
            //Solução do problema de caracteres especiais no ambiente Windows.
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM pessoa WHERE id={$id}";
        $result = $conn->query($sql);

        return $result->fetch();
    }

    public static function delete($id)
    {
        $servername = 'localhost';
        $username = 'livro';
        $password = '123456';
        $database = 'livro';

        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
            //Solução do problema de caracteres especiais no ambiente Windows.
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM pessoa WHERE id={$id}";
        $result = $conn->query($sql);

        return $result;
    }

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

        $sql = "SELECT * FROM pessoa ORDER BY id";
        $result = $conn->query($sql);

        return $result->fetchAll();

    }
}