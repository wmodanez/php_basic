<?php


class Cidade
{
    private static $conn;

    public static function getConnection()
    {
        if (empty(self::$conn)) {

            $conexao = parse_ini_file('config/livro.ini');
            $servername = $conexao['servername'];
            $database = $conexao['database'];
            $username = $conexao['username'];
            $password = $conexao['password'];

            self::$conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }

    public static function listAll()
    {
        $conn = self::getConnection();

        $sql = 'SELECT id, nome from cidade ORDER BY nome';
        $result = $conn->query($sql);

        return $result->fetchAll();
    }
}