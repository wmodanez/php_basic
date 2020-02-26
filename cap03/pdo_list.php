<?php

$servername = 'localhost';
$username = 'livro';
$password = '123456';
$database = 'livro';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
        //Solução do problema de caracteres especiais no ambiente Windows.
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query('SELECT codigo, nome FROM famosos');

    if ($result) {
        foreach ($result as $row) {
            echo $row['codigo'] . ' - ' . $row['nome'] . "\n";
        }
    }
    $conn = null;
} catch (PDOException $exception) {
    print "Erro: {$exception->getMessage()}.\n";
}
