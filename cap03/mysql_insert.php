<?php

$servername = 'localhost';
$username = 'livro';
$password = '123456';
$database = 'livro';

$mysql = new mysqli($servername, $username, $password, $database);
//Solução do problema de caracteres especiais no ambiente Windows.
$mysql -> set_charset("utf8");

if($mysql->connect_error){
    die("Falha na conexão: {$mysql->connect_error}");
}
echo 'Conexão efetuada com sucesso';

mysqli_query($mysql, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Verissimo')");
mysqli_query($mysql, "INSERT INTO famosos (codigo, nome) VALUES (2, 'John Lennon')");
mysqli_query($mysql, "INSERT INTO famosos (codigo, nome) VALUES (3, 'Mahatma Gandhi')");
mysqli_query($mysql, "INSERT INTO famosos (codigo, nome) VALUES (4, 'Ayrton Senna')");
mysqli_query($mysql, "INSERT INTO famosos (codigo, nome) VALUES (5, 'Charlie Chaplin')");
mysqli_query($mysql, "INSERT INTO famosos (codigo, nome) VALUES (6, 'Anita Garibaldi')");
mysqli_query($mysql, "INSERT INTO famosos (codigo, nome) VALUES (7, 'Mário Quintana')");

mysqli_close($mysql);