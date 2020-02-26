<?php

$servername = 'localhost';
$username = 'livro';
$password = '123456';
$database = 'livro';

$mysql = new mysqli($servername, $username, $password, $database);
$mysql->set_charset("utf8");

$result = mysqli_query($mysql, 'SELECT codigo, nome FROM famosos');

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['codigo'] . ' - ' . $row['nome'] . "\n";
    }
}