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

    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Verissimo')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (2, 'John Lennon')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'Mahatma Gandhi')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (4, 'Ayrton Senna')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (5, 'Charlie Chaplin')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (6, 'Anita Garibaldi')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (7, 'Mário Quintana')");

    $conn = null;
} catch (PDOException $exception) {
    print "Erro: {$exception->getMessage()}.\n";
}
