<?php

class Pessoa
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

    public static function save($pessoa)
    {
        self::$conn = self::getConnection();

        if (empty($pessoa['id'])) {
            $sql = "INSERT INTO pessoa (nome, endereco, bairro, telefone, email, id_cidade)
                            VALUES (:nome, :endereco, :bairro, :telefone, :email, :id_cidade)";
        } else {
            $sql = "UPDATE pessoa SET nome = :nome, endereco = :endereco, bairro = :bairro, telefone = :telefone, 
                        email = :email, id_cidade = :id_cidade WHERE id = :id ";

        }
        $result = self::$conn->prepare($sql);
        $result->execute([':id' => $pessoa['id'], ':nome' => $pessoa['nome'], ':endereco' => $pessoa['endereco'],
            ':bairro' => $pessoa['bairro'], ':telefone' => $pessoa['telefone'], ':email' => $pessoa['email'],
            ':id_cidade' => $pessoa['id_cidade'],]);
    }

    public static function find($id)
    {
        $conn = self::getConnection();

        $sql = "SELECT * FROM pessoa WHERE id=:id";
        $result = self::$conn->prepare($sql);
        $result->execute([':id' => $id]);

        return $result->fetch();
    }

    public static function delete($id)
    {
        $conn = self::getConnection();

        $sql = "DELETE FROM pessoa WHERE id={$id}";
        $result = self::$conn->prepare($sql);
        $result->execute([':id' => $id]);

        return $result;
    }

    public static function listAll()
    {
        $conn = self::getConnection();

        $sql = "SELECT * FROM pessoa ORDER BY id";
        $result = $conn->query($sql);

        return $result->fetchAll();

    }
}